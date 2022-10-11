<?php

// resources/lang/en/form.php

return [
    
    "index" => [
        "books" => [
            "title" => "List of Books",
            "search" => "Search",
            "button" => "Add Book",
            "columns" => [
                "1" => "Name",
                "2" => "Category",
                "3" => "Author",
                "4" => "Publisher",
                "5" => "Published Date",
                "6" => "Stock",
                "7" => "Action"
            ],
        ],

        "categories" => [
            "title" => "List of Categories",
            "search" => "Search",
            "button" => "Add Category",
            "columns" => [
                "1" => "Name",
                "2" => "Number of Books",
                "3" => "Description",
                "4" => "Action",
            ],
        ],

        "students" => [
            "title" => "List of Students",
            "search" => "Search",
            "columns" => [
                "1" => "First Name",
                "2" => "Last Name",
                "3" => "Email",
                "4" => "Books Borrowed",
                "5" => "Status",
            ],
            "status" => [
                "1" => "Approved",
                "2" => "Approve",
                "3" => "Reject",
            ]
        ],

        "borrows" => [
            "title" => "List of Borrowers",
            "search" => "Search",
            "columns" => [
                "1" => "First Name",
                "2" => "Last Name",
                "3" => "Book Name",
                "4" => "Borrowed Date",
                "5" => "Due Date",
                "6" => "Return Date",
                "7" => "Status",
            ],
            "status" => [
                "1" => "Approve",
                "2" => "Reject",
                "3" => "Approved",
                "4" => "Returned",
                "5" => "Rejected",
            ]
        ],
    ],

    "add" => [
        "books" => [
            "title" => "Add Book Form",
            "fillable" => [
                "1" => "Book Name",
                "2" => "Book Author",
                "3" => "Book Publisher",
                "4" => "Published Date",
                "5" => "Book Stock",
                "6" => "Book Category",
                "7" => "Book Image",
                "8" => "Book Description",            
            ],
            "button" => "Submit",
        ],

        "categories" => [
            "title" => "Add Category Form",
            "fillable" => [
                "1" => "Category Name",
                "2" => "Category Image",
                "3" => "Category Description",           
            ],
            "button" => "Submit",
        ],

        "admin" => [
            "title" => "Register New Admin",
            "fillable" => [
                "1" => "First Name",
                "2" => "Last Name",
                "3" => "Username",
                "4" => "Email",
                "5" => "Password",
                "6" => "Password Confirmation",
                "7" => "Profile Image",          
            ],
            "button" => "Submit",
        ],
    ],

    "edit" => [
        "books" => [
            "title" => "Edit Book Form",
            "fillable" => [
                "1" => "Book Name",
                "2" => "Book Author",
                "3" => "Book Publisher",
                "4" => "Published Date",
                "5" => "Book Stock",
                "6" => "Book Category",
                "7" => "Book Image",
                "8" => "Book Description",            
            ],
            "button" => "Submit",
        ],

        "categories" => [
            "title" => "Edit Category Form",
            "fillable" => [
                "1" => "Category Name",
                "2" => "Category Image",
                "3" => "Category Description",           
            ],
            "button" => "Submit",
        ],
    ],

    "navigation" => [
        "1" => "Books",
        "2" => "Books Loan",
        "3" => "Book Categories",
        "4" => "Student",
        "5" => "Register Admin",
        "6" => "Logout"
    ],

    "header" => [
        "lang" => "Select Language"
    ]
];