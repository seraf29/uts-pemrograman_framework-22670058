# UTS Pemrograman Web - Blade Layouting (Paket Genap)

Admin   = template Xeloro  (6 halaman)
Landing = template Amping  (6 halaman)

## Cara pakai
1. Buat project Laravel baru:
   composer create-project laravel/laravel uts-blade
2. Salin isi folder ini ke project (timpa jika diminta):
   app/  public/  resources/  routes/
3. Jalankan:
   php artisan serve

## URL
Landing (LandingController)       Admin (AdminController)
/              index              /admin              index
/about         about              /admin/calendar     calendar
/activities    activities         /admin/forms        forms
/blog          blog               /admin/login        login
/contact       contact            /admin/datatables   datatables
/testimonial   testimonial        /admin/sweetalerts  sweetalerts

## Struktur layout
resources/views/layouts/admin.blade.php, landing.blade.php  -> layout utama
resources/views/{admin,landing}/partials/                   -> head, header, (sidebar), footer, scripts
resources/views/{admin,landing}/*.blade.php                 -> 6 halaman per template (@extends + @section('content'))
Asset: public/assets/admin dan public/assets/landing
