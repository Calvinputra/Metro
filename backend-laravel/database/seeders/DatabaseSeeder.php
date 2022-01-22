<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(AttributesTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductAttributesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(CustomerAddressesTableSeeder::class);
        $this->call(TransactionStatusesTableSeeder::class);
        $this->call(CartsTableSeeder::class);
        $this->call(WishlistsTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(TransactionDetailsTableSeeder::class);
        $this->call(TransactionLogsTableSeeder::class);
        $this->call(CustomerTokensTableSeeder::class);
        $this->call(TransactionReviewsTableSeeder::class);
        $this->call(BalancesTableSeeder::class);
        $this->call(AccountsTableSeeder::class);
        $this->call(BalanceLedgersTableSeeder::class);
        $this->call(AccountLedgersTableSeeder::class);
        $this->call(WebsiteFeedbackTableSeeder::class);
    }
}
