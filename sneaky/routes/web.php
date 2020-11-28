<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Prototyping
Route::get('/p_addressbook', 'PrototypeCtr@tryAddressbook');
Route::get('/p_cart', 'PrototypeCtr@tryCart');
Route::get('/p_chat', 'PrototypeCtr@tryChat');
Route::get('/p_accdash', 'PrototypeCtr@tryAccdash');
Route::get('/p_detailshop', 'PrototypeCtr@tryDetailshop');
Route::get('/p_dhistory', 'PrototypeCtr@tryDhistory');
Route::get('/p_dpost', 'PrototypeCtr@tryDpost');
Route::get('/p_editacc', 'PrototypeCtr@tryEditAcc');
Route::get('/p_editpost', 'PrototypeCtr@');
Route::get('/p_forum', 'PrototypeCtr@tryForum');
Route::get('/p_home', 'PrototypeCtr@tryHome');
Route::get('/p_login', 'PrototypeCtr@tryLogin');
Route::get('/p_mypost', 'PrototypeCtr@tryMypost');
Route::get('/p_orderhistory', 'PrototypeCtr@tryMyorder');
Route::get('/p_payment', 'PrototypeCtr@tryPayment');
Route::get('/p_post', 'PrototypeCtr@tryPost');
Route::get('/p_retur', 'PrototypeCtr@tryRetur');
Route::get('/p_reviewcart', 'PrototypeCtr@tryReviewcart');
Route::get('/p_shippinginfo', 'PrototypeCtr@tryShippinginfo');
Route::get('/p_shippingmethod', 'PrototypeCtr@tryShippingmethod');
Route::get('/p_shop', 'PrototypeCtr@tryShop');
Route::get('/p_signup', 'PrototypeCtr@trySignup');
Route::get('/p_ver_signup', 'PrototypeCtr@tryVer_signup');
Route::get('/p_wishlist', 'PrototypeCtr@tryWishlist');

Route::get('/','Controller@goHome');
Route::get('/goLogin','Controller@goLogin')->name("login");
Route::get('/handleLogin',function(){return back();});
Route::post('/handleLogin','Controller@handlerLogin');
Route::get('/goEditacc','Controller@goEditacc')->middleware("auth");
Route::get('/goAccdash','Controller@goAccdash')->middleware("auth");
Route::get('/handleEditInfo',function(){ return back();});
Route::post('/handleEditInfo','Controller@handleEditInfo');
Route::get('/handleEditPassword',function(){ return back();});
Route::post('/handleEditPassword','Controller@handleEditPassword');
Route::get('/q_shop','Controller@q_shop');
Route::get('/search','Controller@q_shop');
Route::get('/goRegister','Controller@goRegister');
Route::get('/handleRegister',function(){ return back();});
Route::post('/handleRegister','Controller@handleRegister');
Route::get('/sendVerificationMail/{email}','Controller@sendVerificationMail');
Route::get('/verifyMail/{email}','Controller@verifyMail');
Route::get('/goAbout','Controller@goAbout');
Route::get('/goContact','Controller@goContact');
Route::get('/goAdress','Controller@goAdress')->middleware("auth");
Route::get('/goMyorder','Controller@goMyorder')->middleware("auth"); //INI CUSTOMER
Route::get('/goWishlist','Controller@goWishlist')->middleware("auth"); // INI CUSTOMER
Route::get('/logout','Controller@logout');
Route::post('/handleAddAdress','Controller@handleAddAdress');
Route::get('/goChat','Controller@goChat')->middleware("auth");
Route::post('/goChat','Controller@goChat');
Route::get('/sendChat',function(){ return back();});
Route::post('/sendChat','Controller@sendChat');
Route::get('/goForum','Controller@goForum')->middleware("auth");
Route::get('/dpost',function(){ return back();});
Route::post('/dpost','Controller@dpost');
Route::get('/handleRpost',function(){ return back();});
Route::post('/handleRpost','Controller@handleRpost');
Route::get('/handlePost',function(){ return back();});
Route::post('/handlePost','Controller@handlePost');
Route::get('/detailOrderCustomer','Controller@detailOrderCustomer'); //INI CUSTOMER
Route::get('/forgot_password','Controller@forgot_password');
Route::get('/send_reset',function(){ return back();});
Route::post('/send_reset','Controller@send_reset');
Route::get('/reset/{email}','Controller@resetPass');
Route::get('/handleReset',function(){ return back();});
Route::post('/handleReset','Controller@handleReset');
//customer
Route::get('/handleBarang',function(){ return back();});
Route::post('/handleBarang','CustCtr@handleBarang');
Route::get('/detailSneaker/{id_sneaker}','CustCtr@detailSneaker');
Route::get('/handleCart',function(){ return back();});
Route::post('/handleCart','CustCtr@handleCart')->middleware("auth");
Route::get('/clearCart','CustCtr@clearCart');
Route::get('/goCart','CustCtr@goCart');
Route::get('/goCheckout','CustCtr@goCheckout');
Route::get('/myCart/{msg}','CustCtr@myCart')->middleware("auth");
Route::get('/myPost','CustCtr@myPost')->middleware("auth");
Route::get('/editPost','CustCtr@editPost')->middleware("auth");
Route::get('/saveEpost',function(){ return back();});
Route::post('/saveEpost','CustCtr@saveEpost')->middleware("auth");
Route::get('/konfirmasiBayar',function(){ return back();});
Route::post('/konfirmasiBayar','CustCtr@konfirmasiBayar')->middleware("auth");
Route::get('/konfirmasiPenerimaan',function(){ return back();});
Route::post('/konfirmasiPenerimaan','CustCtr@konfirmasiPenerimaan')->middleware("auth");
Route::get('/saveTransaksi',function(){ return back();});
Route::post('/saveTransaksi','CustCtr@saveTransaksi')->middleware("auth");
Route::get('/paypal',function(){ return back();});
Route::post('/paypal','PaymentController@payWithpaypal')->middleware("auth");
Route::get('/cekBayar','PaymentController@getPaymentStatus')->middleware("auth");
Route::get('/ajukanPengembalian',function(){ return back();});
Route::post('/ajukanPengembalian','CustCtr@ajukanPengembalian')->middleware("auth");
Route::get('/kirimPengembalian',function(){ return back();});
Route::post('/kirimPengembalian','CustCtr@kirimPengembalian')->middleware("auth");
//admin
Route::get('/masterUser','AdminCtr@masterUser')->middleware("auth");
Route::get('/masterBarang','AdminCtr@masterBarang')->middleware("auth");
Route::get('/masterForum','AdminCtr@masterForum')->middleware("auth");
Route::get('/masterTrans','AdminCtr@masterTrans')->middleware("auth");
Route::get('/editSlider','AdminCtr@editSlider')->middleware("auth");
Route::get('/masterRpost','AdminCtr@masterRpost')->middleware("auth");
Route::get('/masterRsneaker','AdminCtr@masterRsneaker')->middleware("auth");
//seller
Route::get('/myItem','SellerCtr@myItem')->middleware("auth");
Route::get('/addItem','SellerCtr@addItem')->middleware("auth");
Route::post('/handleNewItem','SellerCtr@handleNewItem')->middleware("auth");
Route::get('/editItem','SellerCtr@editItem')->middleware("auth");
Route::get('/handleEditItem',function(){ return back();});
Route::post('/handleEditItem','SellerCtr@handleEditItem')->middleware("auth");
Route::get('/deleteItem','SellerCtr@deleteItem')->middleware("auth");
Route::get('/addDsneaker',function(){ return back();});
Route::post('/addDsneaker','SellerCtr@addDsneaker')->middleware("auth");
Route::get('/deleteDsneaker',function(){ return back();});
Route::post('/deleteDsneaker','SellerCtr@deleteDsneaker')->middleware("auth");
Route::get('/myOrderAdmin','SellerCtr@myOrderAdmin')->middleware("auth");
Route::get('/detailOrderSeller','SellerCtr@detailOrderSeller')->middleware("auth");
Route::get('/sellerKonfirmasiPengiriman',function(){ return back();});
Route::post('/sellerKonfirmasiPengiriman','SellerCtr@konfirmasiPengiriman')->middleware("auth");
Route::get('/responPengembalian',function(){ return back();});
Route::post('/responPengembalian','SellerCtr@responPengembalian')->middleware("auth");
Route::get('/konfirmasiPengembalian',function(){ return back();});
Route::post('/konfirmasiPengembalian','SellerCtr@konfirmasiPengembalian')->middleware("auth");


//LAPORAN
Route::get('/laporan_community','LaporanCtr@community')->middleware("auth");
Route::get('/laporan_barang','LaporanCtr@barang')->middleware("auth");
Route::get('/laporan_transaksi','LaporanCtr@transaksi')->middleware("auth");
Route::get('/laporan_keuangan','LaporanCtr@keuangan')->middleware("auth");
Route::get('/laporan_user','LaporanCtr@user')->middleware("auth");
Route::get('/laporan_seller','LaporanCtr@seller')->middleware("auth");
