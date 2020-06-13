<?php

$config=[
      'verify'=>[
                        ['field'=>'hall_ticket',
                        'label'=>'HallTicket No.',
                        'rules'=>'required|integer'
                        // |is_unique[studentdetails.hall_ticket]
                        ],

                        ['field'=>'fname',
                        'label'=>'FirstName',
                        'rules'=>'required|alpha'
                        ],

                        ['field'=>'mname',
                        'label'=>'MiddleName',
                        'rules'=>'required|alpha'
                        ],

                        ['field'=>'lname',
                        'label'=>'LastName',
                        'rules'=>'required|alpha'
                        ],

                        ['field'=>'heldin',
                        'label'=>'Duration of Held in',
                        'rules'=>'required|alpha_numeric'
                        ],

                        ['field'=>'branch',
                        'label'=>'Branch',
                        'rules'=>'required|alpha'
                        ],

                        ['field'=>'sem',
                        'label'=>'Sem Information',
                        'rules'=>'required|alpha_numeric'
                        ],

                        ['field'=>'s1',
                        'label'=>'Subject 1',
                        'rules'=>'required|alpha_numeric'
                        ],

                        ['field'=>'s1th',
                        'label'=>'Subject 1 Theory Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s1tht',
                        'label'=>'Subject 1 Total Theory Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s1ut',
                        'label'=>'Subject 1 UT Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s1utt',
                        'label'=>'Subject 1 Total UT Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s1c',
                        'label'=>'Subject 1 Credit',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s2',
                        'label'=>'Subject 2',
                        'rules'=>'required|alpha_numeric'
                        ],

                        ['field'=>'s2th',
                        'label'=>'Subject 2 Theory Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s2tht',
                        'label'=>'Subject 2 Total Theory Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s2ut',
                        'label'=>'Subject 2 UT Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s2utt',
                        'label'=>'Subject 2 Total UT Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s2c',
                        'label'=>'Subject 2 Credit',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s3',
                        'label'=>'Subject 3',
                        'rules'=>'required|alpha_numeric'
                        ],

                        ['field'=>'s3th',
                        'label'=>'Subject 3 Theory Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s3tht',
                        'label'=>'Subject 3 Total Theory Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s3ut',
                        'label'=>'Subject 3 UT Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s3utt',
                        'label'=>'Subject 3 Total UT Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s3c',
                        'label'=>'Subject 3 Credit',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s4',
                        'label'=>'Subject 4',
                        'rules'=>'required|alpha_numeric'
                        ],

                        ['field'=>'s4th',
                        'label'=>'Subject 4 Theory Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s4tht',
                        'label'=>'Subject 4 Total Theory Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s4ut',
                        'label'=>'Subject 4 UT Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s4utt',
                        'label'=>'Subject 4 Total UT Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s4c',
                        'label'=>'Subject 4 Credit',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s5',
                        'label'=>'Subject 5',
                        'rules'=>'required|alpha_numeric'
                        ],

                        ['field'=>'s5th',
                        'label'=>'Subject 5 Theory Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s5tht',
                        'label'=>'Subject 5 Total Theory Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s5ut',
                        'label'=>'Subject 5 UT Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s5utt',
                        'label'=>'Subject 5 Total UT Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s5c',
                        'label'=>'Subject 5 Credit',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s6',
                        'label'=>'Subject 6',
                        'rules'=>'required|alpha_numeric'
                        ],

                        ['field'=>'s6th',
                        'label'=>'Subject 6 Theory Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s6tht',
                        'label'=>'Subject 6 Total Theory Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s6ut',
                        'label'=>'Subject 6 UT Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s6utt',
                        'label'=>'Subject 6 Total UT Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s6c',
                        'label'=>'Subject 6 Credit',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s7',
                        'label'=>'Subject 7',
                        'rules'=>'required|alpha_numeric'
                        ],

                        ['field'=>'s7th',
                        'label'=>'Subject 7 Theory Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s7tht',
                        'label'=>'Subject 7 Total Theory Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s7ut',
                        'label'=>'Subject 7 UT Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s7utt',
                        'label'=>'Subject 7 Total UT Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s7c',
                        'label'=>'Subject 7 Credit',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s8',
                        'label'=>'Subject 8',
                        'rules'=>'required|alpha_numeric'
                        ],

                        ['field'=>'s8th',
                        'label'=>'Subject 8 Theory Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s8tht',
                        'label'=>'Subject 8 Total Theory Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s8ut',
                        'label'=>'Subject 8 UT Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s8utt',
                        'label'=>'Subject 8 Total UT Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s8c',
                        'label'=>'Subject 8 Credit',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s9',
                        'label'=>'Subject 9',
                        'rules'=>'required|alpha_numeric'
                        ],

                        ['field'=>'s9th',
                        'label'=>'Subject 9 Theory Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s9tht',
                        'label'=>'Subject 9 Total Theory Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s9ut',
                        'label'=>'Subject 9 UT Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s9utt',
                        'label'=>'Subject 9 Total UT Marks',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s9c',
                        'label'=>'Subject 9 Credit',
                        'rules'=>'required|integer'
                        ],

                        ['field'=>'s10',
                        'label'=>'Subject 10',
                        'rules'=>'alpha_numeric'
                        ],

                        ['field'=>'s10th',
                        'label'=>'Subject 10 Theory Marks',
                        'rules'=>'integer'
                        ],

                        ['field'=>'s10tht',
                        'label'=>'Subject 10 Total Theory Marks',
                        'rules'=>'integer'
                        ],

                        ['field'=>'s10ut',
                        'label'=>'Subject 10 UT Marks',
                        'rules'=>'integer'
                        ],

                        ['field'=>'s10utt',
                        'label'=>'Subject 10 Total UT Marks',
                        'rules'=>'integer'
                        ],

                        ['field'=>'s10c',
                        'label'=>'Subject 10 Credit',
                        'rules'=>'integer'
                        ],

                        ['field'=>'s11th',
                        'label'=>'Subject 11 Theory Marks',
                        'rules'=>'integer'
                        ],

                        ['field'=>'s11tht',
                        'label'=>'Subject 11 Total Theory Marks',
                        'rules'=>'integer'
                        ],

                        ['field'=>'s11ut',
                        'label'=>'Subject 11 UT Marks',
                        'rules'=>'integer'
                        ],

                        ['field'=>'s11utt',
                        'label'=>'Subject 11 Total UT Marks',
                        'rules'=>'integer'
                        ],

                        ['field'=>'s11c',
                        'label'=>'Subject 11 Credit',
                        'rules'=>'integer'
                        ],


                    ]

];




 ?>
