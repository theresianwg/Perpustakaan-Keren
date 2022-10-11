<?php

// resources/lang/en/form.php

return [

	"books" => [
		"title" => "Halaman Awal",
		"details" => [
			"author" => "Penulis",
			"publisher" => "Penerbit",
			"date" => "Tanggal Terbit",
		],
	],

    "details" => [
		"title" => "Detail Buku",
		"contents" => [
			"last" => "Status Terakhir",
			"status" => [
				"1" => "Ditolak",
				"2" => "Dikembalikan",
				"3" => "Disetujui",
				"4" => "Belum Disetujui",
				"5" => "Belum Dipinjam"
			],
			"stock" => "Ketersediaan",
			"author" => "Penulis",
			"publisher" => "Penerbit",
			"pubdate" => "Tanggal Terbit",
			"bordate" => "Tanggal Terakhir Peminjaman",
			"duedate" => "Batas Waktu Pengembalian",
			"retdate" => "Tanggal Dikembalikan",
			"desc" => "Deskripsi",
		],
        "buttons" => [
            "1" => "Menunggu Persetujuan",
            "2" => "Kembalikan Buku",
            "3" => "Pinjam Lagi",
            "4" => "Minta untuk Pinjam Lagi",
            "5" => "Pinjam Buku",
        ],
	],

    "mybooks" => [
		"title" => "Riwayat Peminjaman",
		"contents" => [
			"author" => "Penulis",
			"publisher" => "Penerbit",
			"date" => "Tanggal Terbit",
			"status" => [
				"1" => "Belum Disetujui",
				"2" => "Disetujui",
				"3" => "Dikembalikan",
				"4" => "Ditolak",
			],
		],
	],

    "borrow" => [
		"title" => "Detail Buku",
		"contents" => [
			"form" => "Formulir Peminjaman Buku",
			"retdate" => "Tanggal Pengembalian",
			"button" => "Ajukan",
		],
	],
	
	"navigation" => [
		"books" => "Buku",
		"mybooks" => "Buku Saya",
		"lang" => "Pilih Bahasa"
	]
];