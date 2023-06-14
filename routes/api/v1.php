<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware([
	'auth:sanctum',
	InitializeTenancyByDomain::class,
	PreventAccessFromCentralDomains::class,
])->group(function () {
	/**
	 * @apiDefine tenantIdParam
	 * @apiParam {String} id UUID dari tenant
	 */

	/**
	 * @api {GET} /tenant Semua data tenant
	 * @apiVersion 0.1.0
	 * @apiName GetTenant
	 * @apiGroup Tenant
	 *
	 * @apiSuccessExample Success-Response:
	 *     HTTP/1.1 200 OK
	 *     {
	 *       "firstname": "John",
	 *       "lastname": "Doe"
	 *     }
	 */

	/**
	 * @api {GET} /tenant/:id Data tenant berdasarkan id
	 * @apiVersion 0.1.0
	 * @apiName GetTenantById
	 * @apiGroup Tenant
	 * 
	 * @apiUse tenantIdParam
	 *
	 * @apiSuccessExample Success-Response:
	 *     HTTP/1.1 200 OK
	 *     {
	 *       "firstname": "John",
	 *       "lastname": "Doe"
	 *     }
	 */

	/**
	 * @api {POST} /tenant Tambah data tenant
	 * @apiVersion 0.1.0
	 * @apiName CreateTenant
	 * @apiGroup Tenant
	 *
	 * @apiSuccessExample Success-Response:
	 *     HTTP/1.1 200 OK
	 *     {
	 *       "firstname": "John",
	 *       "lastname": "Doe"
	 *     }
	 */

	/**
	 * @api {PUT|PATCH} /tenant/:id Ubah data tenant
	 * @apiVersion 0.1.0
	 * @apiName UpdateTenant
	 * @apiGroup Tenant
	 * 
	 * @apiUse tenantIdParam
	 *
	 * @apiSuccessExample Success-Response:
	 *     HTTP/1.1 200 OK
	 *     {
	 *       "firstname": "John",
	 *       "lastname": "Doe"
	 *     }
	 */

	/**
	 * @api {DELETE} /tenant/:id Hapus data tenant
	 * @apiVersion 0.1.0
	 * @apiName DeleteTenant
	 * @apiGroup Tenant
	 *
	 * @apiUse tenantIdParam
	 * 
	 * @apiSuccessExample Success-Response:
	 *     HTTP/1.1 200 OK
	 *     {
	 *       "firstname": "John",
	 *       "lastname": "Doe"
	 *     }
	 */

	Route::apiResource('tenant', TenantController::class);
});
