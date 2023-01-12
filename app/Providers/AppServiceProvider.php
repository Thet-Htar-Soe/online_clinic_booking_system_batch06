<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Contracts\Services\Doctor\DoctorServiceInterface', 'App\Services\Doctor\DoctorServices');
        $this->app->bind('App\Contracts\Dao\Doctor\DoctorDaoInterface', 'App\Dao\Doctor\DoctorDao');

        $this->app->bind('App\Contracts\Services\Doctor\DoctorDetailServiceInterface', 'App\Services\Doctor\DoctorDetailServices');
        $this->app->bind('App\Contracts\Dao\Doctor\DoctorDetailDaoInterface', 'App\Dao\Doctor\DoctorDetailDao');

        $this->app->bind('App\Contracts\Services\Admin\AdminServiceInterface', 'App\Services\Admin\AdminServices');
        $this->app->bind('App\Contracts\Dao\Admin\AdminDaoInterface', 'App\Dao\Admin\AdminDao');

        $this->app->bind('App\Contracts\Services\Patient\PatientServiceInterface', 'App\Services\Patient\PatientServices');
        $this->app->bind('App\Contracts\Dao\Patient\PatientDaoInterface', 'App\Dao\Patient\PatientDao');

        $this->app->bind('App\Contracts\Services\Medicine\MedicineServiceInterface', 'App\Services\Medicine\MedicineServices');
        $this->app->bind('App\Contracts\Dao\Medicine\MedicineDaoInterface', 'App\Dao\Medicine\MedicineDao');

        $this->app->bind('App\Contracts\Services\Category\CategoryServiceInterface', 'App\Services\Category\CategoryServices');
        $this->app->bind('App\Contracts\Dao\Category\CategoryDaoInterface', 'App\Dao\Category\CategoryDao');

        $this->app->bind('App\Contracts\Services\Invoice\InvoiceServiceInterface', 'App\Services\Invoice\InvoiceServices');
        $this->app->bind('App\Contracts\Dao\Invoice\InvoiceDaoInterface', 'App\Dao\Invoice\InvoiceDao');

        $this->app->bind('App\Contracts\Services\Invoice\InvoiceDetailServiceInterface', 'App\Services\Invoice\InvoiceDetailServices');
        $this->app->bind('App\Contracts\Dao\Invoice\InvoiceDetailDaoInterface', 'App\Dao\Invoice\InvoiceDetailDao');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
