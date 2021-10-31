
// Seeding command
php artisan iseed data_types,data_rows,translations,menus,menu_items,permissions,roles,permission_role,settings,users,personal_access_tokens --force


// Seeding production Database
php artisan iseed data_types,data_rows,translations,menus,menu_items,permissions,roles,permission_role,settings,users,personal_access_tokens,attributes,categories,countries,provinces,cities,transaction_statuses --force

// Seeding testing Database
php artisan iseed data_types,data_rows,translations,menus,menu_items,permissions,roles,permission_role,settings,users,personal_access_tokens,attributes,categories,countries,provinces,cities,transaction_statuses,products,product_attributes,customers,customer_addresses,carts,wishlists,transactions,transaction_details,transaction_logs --force