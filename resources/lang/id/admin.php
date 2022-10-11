<?php

// resources/lang/en/form.php

return [

    "index" => [
        "books" => [
            "title" => "Daftar Buku",
            "search" => "Cari",
            "button" => "Tambah Buku",
            "columns" => [
                "1" => "Nama",
                "2" => "Kategori",
                "3" => "Penulis",
                "4" => "Penerbit",
                "5" => "Tanggal Terbit",
                "6" => "Ketersediaan",
                "7" => "Aksi"
            ],
        ],

        "categories" => [
            "title" => "Daftar Kategori",
            "search" => "Cari",
            "button" => "Tambah Kategori",
            "columns" => [
                "1" => "Nama",
                "2" => "Jumlah Buku",
                "3" => "Deskripsi",
                "4" => "Aksi",
            ],
        ],

        "students" => [
            "title" => "Daftar Pelajar",
            "search" => "Cari",
            "columns" => [
                "1" => "Nama Depan",
                "2" => "Nama Belakang",
                "3" => "Email",
                "4" => "Pinjaman Buku",
                "5" => "Status",
            ],
            "status" => [
                "1" => "Disetujui",
                "2" => "Setujui",
                "3" => "Tolak",
            ]
        ],

        "borrows" => [
            "title" => "Daftar Peminjam",
            "search" => "Cari",
            "columns" => [
                "1" => "Nama Depan",
                "2" => "Nama Belakang",
                "3" => "Judul Buku",
                "4" => "Tanggal Peminjaman",
                "5" => "Batas Waktu Pengembalian",
                "6" => "Tanggal Pengembalian",
                "7" => "Status",
            ],
            "status" => [
                "1" => "Setujui",
                "2" => "Tolak",
                "3" => "Disetujui",
                "4" => "Dikembalikan",
                "5" => "Ditolak",
            ]
        ],
    ],

    "add" => [
        "books" => [
            "title" => "Formulir Penambahan Buku",
            "fillable" => [
                "1" => "Judul Buku",
                "2" => "Penuls Buku",
                "3" => "Penerbit Buku",
                "4" => "Tanggal Terbit",
                "5" => "Ketersediaan Buku",
                "6" => "Kategori Buku",
                "7" => "Gambar Sampul Buku",
                "8" => "Deskripsi Buku",            
            ],
            "button" => "Tambah",
        ],

        "categories" => [
            "title" => "Formulir Penambahan Kategori",
            "fillable" => [
                "1" => "Nama Kategori",
                "2" => "Gambar Kategori",
                "3" => "Deskripsi Kategori",           
            ],
            "button" => "Tambah",
        ],

        "admin" => [
            "title" => "Tambah Admin Baru",
            "fillable" => [
                "1" => "Nama Depan",
                "2" => "Nama Belakang",
                "3" => "Username",
                "4" => "Email",
                "5" => "Kata Sandi",
                "6" => "Konfirmasi Kata Sandi",
                "7" => "Gambar Profil",          
            ],
            "button" => "Tambah",
        ],
    ],

    "edit" => [
        "books" => [
            "title" => "Formulir Pengeditan Buku",
            "fillable" => [
                "1" => "Judul Buku",
                "2" => "Penuls Buku",
                "3" => "Penerbit Buku",
                "4" => "Tanggal Terbit",
                "5" => "Ketersediaan Buku",
                "6" => "Kategori Buku",
                "7" => "Gambar Sampul Buku",
                "8" => "Deskripsi Buku",            
            ],
            "button" => "Edit",
        ],

        "categories" => [
            "title" => "Formulir Pengeditan Kategori",
            "fillable" => [
                "1" => "Nama Kategori",
                "2" => "Gambar Kategori",
                "3" => "Deskripsi Kategori",           
            ],
            "button" => "Edit",
        ],
    ],

    "navigation" => [
        "1" => "Buku",
        "2" => "Peminjaman Buku",
        "3" => "Kategori Buku",
        "4" => "Pelajar",
        "5" => "Daftarkan Admin",
        "6" => "Keluar"
    ],

    "header" => [
        "lang" => "Pilih Bahasa"
    ]
];