@extends('layouts2.app2')

@section('content')
       <div id="content">
                <div class="panel">
                 

                       

                       
                    </div>
                    <div class="col-md-0 col-sm-12">
                        
                       
                             
                              
             

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: black;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title animated fadeInLeft"><center>WELCOME<br> {{Auth::user()->permession}}</center></div>
            </div>
        </div>
    </body>
                </div>
                <!--end  Welcome -->
            </div>


           

         



    </div>



</div>
                    
                            </div>
                          </div>
                        </div>                   
                    </div>
                  </div>                    
                </div>
@endsection
