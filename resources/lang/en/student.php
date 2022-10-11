<?php

// resources/lang/en/form.php

return [

	"books" => [
		"title" => "Home",
		"details" => [
			"author" => "Author",
			"publisher" => "Publisher",
			"date" => "Published Date",
		],
	],

	"details" => [
		"title" => "Detail Book",
		"contents" => [
			"last" => "Last Status",
			"status" => [
				"1" => "Rejected",
				"2" => "Returned",
				"3" => "Approved",
				"4" => "Not Yet Approved",
				"5" => "Haven't Borrowed"
			],
			"stock" => "Stock",
			"author" => "Author",
			"publisher" => "Publisher",
			"pubdate" => "Published Date",
			"bordate" => "Last Borrow Date",
			"duedate" => "Due Date",
			"retdate" => "Return Date",
			"desc" => "Description",
		],
		"buttons" => [
			"1" => "Waiting for Approval",
			"2" => "Return Book",
			"3" => "Borrow Again",
			"4" => "Request to Borrow Again",
			"5" => "Borrow Book",
		],		
	],

	"mybooks" => [
		"title" => "My Borrowment History",
		"contents" => [
			"author" => "Author",
			"publisher" => "Publisher",
			"date" => "Published Date",
			"status" => [
				"1" => "Not Yet Approved",
				"2" => "Approved",
				"3" => "Returned",
				"4" => "Rejected",
			],
		],
	],

	"borrow" => [
		"title" => "Detail Book",
		"contents" => [
			"form" => "Form Book Loan",
			"retdate" => "Return Date",
			"button" => "Submit",
		],
	],
	
	"navigation" => [
		"books" => "Books",
		"mybooks" => "My Books",
		"lang" => "Select Language"
	]
];