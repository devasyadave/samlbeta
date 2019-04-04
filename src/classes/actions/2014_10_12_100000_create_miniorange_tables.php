<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMiniorangeTables extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mo_config', function (Blueprint $table) {
            $table->string('id', 10)->unique();
            $table->string('mo_saml_host_name', 100);
            $table->string('mo_saml_admin_email', 100);
            $table->string('mo_saml_admin_password', 100);
            $table->string('mo_saml_admin_customer_key', 100);
            $table->string('mo_saml_admin_api_key', 100);
            $table->string('mo_saml_customer_token', 100);
            $table->string('mo_saml_free_version', 100);
            $table->string('mo_saml_message', 300);
            $table->string('mo_saml_registration_status', 100);
            $table->string('vl_check_t', 100);
            $table->string('sml_lk', 100);
            $table->string('site_ck_l', 100);
            $table->string('t_site_status', 100);
            $table->string('saml_identity_name', 100);
            $table->string('idp_entity_id', 100);
            $table->string('saml_login_url', 100);
            $table->string('saml_login_binding_type', 100);
            $table->string('saml_logout_url', 100);
            $table->string('force_authentication', 100);
            $table->string('sp_base_url', 100);
            $table->string('sp_entity_id', 100);
            $table->string('acs_url', 100);
            $table->string('single_logout_url', 100);
            $table->string('saml_am_email', 100);
            $table->string('saml_am_username', 100);
            $table->string('mo_saml_custom_attrs_mapping', 100);
            $table->string('force_sso', 100);
            $table->string('application_url', 100);
            $table->string('site_logout_url', 100);
            $table->string('saml_x509_certificate', 1500);
            $table->string('mo_saml_new_registration', 10);
            $table->string('mo_saml_admin_phone', 20);
            $table->string('mo_saml_verify_customer', 10);
            $table->string('mo_saml_idp_config_complete', 100);
            $table->string('mo_saml_transactionId', 100);
            $table->string('mo_saml_guest_enabled',10);
            $table->string('session_index',100);
        });
        Schema::create('mo_admin', function (Blueprint $table) {
            $table->string('id',10);
            $table->string('email', 100);
            $table->string('password', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mo_config');
        Schema::dropIfExists('mo_admin');
    }
}