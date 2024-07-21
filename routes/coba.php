<?php

use App\Models\BusReservation;
use App\Models\TicketBus;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Xendit\Configuration;

Route::get('/coba', function () {
    // return Str::uuid();
    return view('coba');
    // DB::statement('SET FOREIGN_KEY_CHECKS=0');

    // // Truncate the table
    // Schema::disableForeignKeyConstraints();
    // BusReservation::truncate();
    // Schema::enableForeignKeyConstraints();

    // // Enable foreign key checks
    // DB::statement('SET FOREIGN_KEY_CHECKS=1');
    // return 'ok';

    // Configuration::setXenditKey(env('XENDIT_API_KEY'));
    // $apikey = env('XENDIT_API_KEY');

    // $ch = curl_init();

    // $data = [
    //     "external_id" => "payment-link-example",
    //     "amount" => 510000,
    //     "description" => "Invoice Demo #123",
    //     "invoice_duration" => 86400,
    //     "customer" => [
    //         "given_names" => "John",
    //         "surname" => "Doe",
    //         "email" => "johndoe@example.com",
    //         "mobile_number" => "+6282132397302",
    //         "addresses" => [
    //             [
    //                 "city" => "Jakarta Selatan",
    //                 "country" => "Indonesia",
    //                 "postal_code" => "12345",
    //                 "state" => "Daerah Khusus Ibukota Jakarta",
    //                 "street_line1" => "Jalan Makan",
    //                 "street_line2" => "Kecamatan Kebayoran Baru"
    //             ]
    //         ]
    //     ],
    //     "customer_notification_preference" => [
    //         "invoice_created" => ["whatsapp", "email", "viber"],
    //         "invoice_reminder" => ["whatsapp", "email", "viber"],
    //         "invoice_paid" => ["whatsapp", "email", "viber"]
    //     ],
    //     "success_redirect_url" => "https://www.google.com",
    //     "failure_redirect_url" => "https://www.google.com",
    //     "currency" => "IDR",
    //     "items" => [
    //         [
    //             "name" => "Air Conditioner",
    //             "quantity" => 1,
    //             "price" => 100000,
    //             "category" => "Electronic",
    //             "url" => "https://yourcompany.com/example_item"
    //         ]
    //     ],
    //     "fees" => [
    //         [
    //             "type" => "ADMIN",
    //             "value" => 5000
    //         ]
    //     ],
    //     "payment_methods" => ["MANDIRI"],
    //     "channel_properties" => [
    //         "cards" => [
    //             "allowed_bins" => ["400000", "52000000"],
    //             "installment_configuration" => [
    //                 "allow_full_payment" => false,
    //                 "allowed_terms" => [
    //                     [
    //                         "issuer" => "BCA",
    //                         "terms" => [3, 6, 12]
    //                     ],
    //                     [
    //                         "issuer" => "BNI",
    //                         "terms" => [3, 6]
    //                     ],
    //                     [
    //                         "issuer" => "MANDIRI",
    //                         "terms" => [6]
    //                     ]
    //                 ]
    //             ]
    //         ]
    //     ],
    //     "metadata" => [
    //         "store_branch" => "Jakarta"
    //     ]
    // ];

    // curl_setopt($ch, CURLOPT_URL, "https://api.xendit.co/v2/invoices");
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_POST, 1);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    // curl_setopt($ch, CURLOPT_USERPWD, $apikey);

    // $headers = [];
    // $headers[] = "Content-Type: application/json";
    // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // $result = curl_exec($ch);
    // if (curl_errno($ch)) {
    //     echo 'Error:' . curl_error($ch);
    // }
    // curl_close($ch);

    // echo $result;
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