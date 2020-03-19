<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* TODO: DODAĆ TABELĘ Z TRANSAKCJAMI (DO LOYALITY) */

/* Addresses */
Route::get('addresses','AddressController@getAllAddresses');
Route::get('addresses/{id}', 'AddressController@getAddress');
Route::post('addresses', 'AddressController@addAddress');
Route::put('addresses/{address}', 'AddressController@editAddress');
Route::delete('addresses/{address}', 'AddressController@deleteAddress');

/* Companies */
Route::get('companies', 'CompanyController@getAllCompanies');
Route::get('companies/{id}', 'CompanyController@getCompany');
Route::post('companies', 'CompanyController@addCompany');
Route::put('companies/{company}', 'CompanyController@editCompany');
Route::delete('companies/{company}', 'CompanyController@deleteCompany');

/* Company Types */
Route::get('company-types', 'CompanyTypeController@getAllCompanyTypes');
Route::get('company-types/{id}', 'CompanyTypeController@getCompanyType');
Route::post('company-types', 'CompanyTypeController@addCompanyType');
Route::put('company-types/{companyType}', 'CompanyTypeController@editCompanyType');
Route::delete('company-types/{companyType}', 'CompanyTypeController@deleteCompanyType');

/* Currencies */
Route::get('currencies', 'CurrencyController@getAllCurrencies');
Route::get('currencies/{id}', 'CurrencyController@getCurrency');
Route::post('currencies', 'CurrencyController@addCurrency');
Route::put('currencies/{currency}', 'CurrencyController@editCurrency');
Route::delete('currencies/{currency}', 'CurrencyController@deleteCurrency');

/* Document Contents */
Route::get('document-contents', 'DocumentContentController@getDocumentContents');
Route::get('document-contents/{id}', 'DocumentContentController@getDocumentContent');
Route::post('document-contents', 'DocumentContentController@addDocumentContent');
Route::put('document-contents/{documentContent}', 'DocumentContentController@editDocumentContent');
Route::delete('document-contents/{documentContent}', 'DocumentContentController@deleteDocumentContent');

/* Document Headers */
Route::get('document-headers', 'DocumentHeaderController@getAllDocumentHeaders');
Route::get('document-headers/{id}', 'DocumentHeaderController@getDocumentHeader');
Route::post('document-headers', 'DocumentHeaderController@addDocumentHeader');
Route::put('document-headers/{documentHeader}', 'DocumentHeaderController@editDocumentHeader');
Route::delete('document-headers/{documentHeader}', 'DocumentHeaderController@deleteDocumentHeader');

/* Document Types */
Route::get('document-types', 'DocumentTypeController@getAllDocumentTypes');
Route::get('document-types/{id}', 'DocumentTypeController@getDocumentType');
Route::post('document-types', 'DocumentTypeController@addDocumentType');
Route::put('document-types/{documentType}', 'DocumentTypeController@editDocumentType');
Route::delete('document-types/{documentType}', 'DocumentTypeController@deleteDocumentType');

/* Employees */
Route::get('employees', 'EmployeeController@getAllEmployees');
Route::get('employees/{id}', 'EmployeeController@getEmployee');
Route::post('employees', 'EmployeeController@addEmployee');
Route::put('employees/{employee}', 'EmployeeController@editEmployee');
Route::delete('employees/{employee}', 'EmployeeController@deleteEmployee');

/* Lot numbers */
Route::get('lot-numbers', 'LotNumberController@getAllLotNumbers');
Route::get('lot-numbers/{id}', 'LotNumberController@getLotNumber');
Route::post('lot-numbers', 'LotNumberController@addLotNumber');
Route::put('lot-numbers/{lotNumber}', 'LotNumberController@editLotNumber');
Route::delete('lot-numbers/{lotNumber}', 'LotNumberController@deleteLotNumber');

/* Loyality */
Route::get('loyality', 'LoyalityController@getAllLoyality');
Route::get('loyality/{id}', 'LoyalityController@getLoyality');
Route::post('loyality', 'LoyalityController@addLoyality');
Route::put('loyality/{loyality}', 'LoyalityController@editLoyality');
Route::delete('loyality/{loyality}', 'LoyalityController@deleteLoyality');

/* Persons */
Route::get('persons', 'PersonController@getAllPersons');
Route::get('persons/{id}', 'PersonController@getPerson');
Route::post('persons', 'PersonController@addPerson');
Route::put('persons/{person}', 'PersonController@editPerson');
Route::delete('persons/{person}', 'PersonController@deletePerson');

/* Products */
Route::get('products', 'ProductController@getAllProducts');
Route::get('products/{id}', 'ProductController@getProduct');
Route::post('products', 'ProductController@addProduct');
Route::put('products/{product}', 'ProductController@editProduct');
Route::delete('products/{product}', 'ProductController@deleteProduct');

/* Warehouses */
Route::get('warehouses', 'WarehouseController@getAllWarehouses');
Route::get('warehouses/{id}', 'ProductController@getWarehouse');
Route::post('warehouses', 'ProductController@addProduct');
Route::put('warehouses/{warehouse}', 'ProductController@editProduct');
Route::delete('warehouses/{warehouse}', 'ProductController@deleteProduct');

