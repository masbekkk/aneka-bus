<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusReservationController;
use App\Http\Controllers\TicketBusController;
use App\Models\BusRoute;
use App\Models\TicketBus;
use Illuminate\Support\Facades\Route;
use Xendit\Configuration;
use Xendit\BalanceAndTransaction\TransactionApi;
use Xendit\Invoice\InvoiceApi;

// Route::get('/', function () {
//     return ['Laravel' => app()->version()];
// });

require __DIR__.'/auth.php';

Route::get('/', function () {
    // return range(1, 23);
    $routes = BusRoute::all();
    return view('landing-page.index', compact('routes'));
})->name('landing-page');

Route::get('/admin', function () {
    $routes = BusRoute::all();
    return view('admin.ticket.index', compact('routes'));
});

Route::get('/admin-order', function () {
    $routes = BusRoute::all();
    return view('admin.ticket.order', compact('routes'));
});


Route::resource('admin-tiket', AdminController::class);

Route::get('/coba', function () {

    Configuration::setXenditKey(env('XENDIT_API_KEY'));
    $apikey = env('XENDIT_API_KEY');

    $ch = curl_init();

    $data = [
        "external_id" => "payment-link-example",
        "amount" => 510000,
        "description" => "Invoice Demo #123",
        "invoice_duration" => 86400,
        "customer" => [
            "given_names" => "John",
            "surname" => "Doe",
            "email" => "johndoe@example.com",
            "mobile_number" => "+6282132397302",
            "addresses" => [
                [
                    "city" => "Jakarta Selatan",
                    "country" => "Indonesia",
                    "postal_code" => "12345",
                    "state" => "Daerah Khusus Ibukota Jakarta",
                    "street_line1" => "Jalan Makan",
                    "street_line2" => "Kecamatan Kebayoran Baru"
                ]
            ]
        ],
        "customer_notification_preference" => [
            "invoice_created" => ["whatsapp", "email", "viber"],
            "invoice_reminder" => ["whatsapp", "email", "viber"],
            "invoice_paid" => ["whatsapp", "email", "viber"]
        ],
        "success_redirect_url" => "https://www.google.com",
        "failure_redirect_url" => "https://www.google.com",
        "currency" => "IDR",
        "items" => [
            [
                "name" => "Air Conditioner",
                "quantity" => 1,
                "price" => 100000,
                "category" => "Electronic",
                "url" => "https://yourcompany.com/example_item"
            ]
        ],
        "fees" => [
            [
                "type" => "ADMIN",
                "value" => 5000
            ]
        ],
        "payment_methods" => ["MANDIRI"],
        "channel_properties" => [
            "cards" => [
                "allowed_bins" => ["400000", "52000000"],
                "installment_configuration" => [
                    "allow_full_payment" => false,
                    "allowed_terms" => [
                        [
                            "issuer" => "BCA",
                            "terms" => [3, 6, 12]
                        ],
                        [
                            "issuer" => "BNI",
                            "terms" => [3, 6]
                        ],
                        [
                            "issuer" => "MANDIRI",
                            "terms" => [6]
                        ]
                    ]
                ]
            ]
        ],
        "metadata" => [
            "store_branch" => "Jakarta"
        ]
    ];

    curl_setopt($ch, CURLOPT_URL, "https://api.xendit.co/v2/invoices");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_USERPWD, $apikey);

    $headers = [];
    $headers[] = "Content-Type: application/json";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);

    echo $result;
});

Route::get('/coba3', function () {
    // dd("ok");
    return view('coba3');
});

Route::get('/seat', function () {
    return view('ticket-bus.seat');
});

Route::get('/coba2', function () {
    return view('coba2');
});
Route::get('/coba4', function () {
    return view('coba4');
});

Route::get('/coba5/{id}', function ($id) {
    $ticket = TicketBus::with('type_bus', 'bus_reservation')->findOrFail($id);
    $seats = collect(explode(',', $ticket->type_bus->seats));
    $booked = explode(',', $ticket->booked_seats);
    return view('coba5', compact('ticket', 'booked', 'seats'));
});

Route::get('/pilih-kursi', function () {
    return view('ticket-bus.pilih-kursi');
});

Route::get('/passenger', function () {
    return view('ticket-bus.passenger');
});

Route::resource('tiket-bus', TicketBusController::class);
Route::get('choose-seat/tiket-bus/{id}', [TicketBusController::class, 'chooseSeat'])->name('choose-seat.ticket-bus');

Route::get('/detail-passenger/{id}', [BusReservationController::class, 'show'])->name('detail-passenger.ticket-bus');
