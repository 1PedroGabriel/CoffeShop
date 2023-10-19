<x-app-layout>
  
    <style>

        .main-section-home {
            display: block;
            transition-duration:  1s;
        
        }
        .main-div-home{

            width: 80%;
            margin: auto;
        }
        
        .main-section-home:hover {

            transition-duration:  1s;
            margin: 0px 20px;
            
        }


        .div-image{
            display: table-row;
        }


    </style>
    <div class="main-div-home">
        
        <ul>
    
            <li>
            
                <section class="main-section-home">
                    
                    <table>
                        
                    <thead>
                        <tr>

                            <div class="div-image">    
                                <th><img src="{{ asset('storage/cafe-fundo-amarelo.jpg')}}" alt=""></th>
                                <th>
                                    <h3>Venha conhecer o melhor do café brasileiro.</h3>
                                </th>
                            </div>

                        </tr>


                    </thead>
                    
                    </table>
                </section>
            </li>
           

            <li>
            
                <section class="main-section-home">
                    
                    <table>
                        
                    <thead>
                        <tr>

                            <div class="div-image">    
                                <th><img src="{{ asset('storage/cafe-fundo-preto.jpg')}}" alt=""></th>
                                <th>
                                    <h3>Venha conhecer o melhor do café brasileiro.</h3>
                                </th>
                            </div>

                        </tr>


                    </thead>
                    
                    </table>
                </section>
            </li>
           
            <li>
            
                <section class="main-section-home">
                    
                    <table>
                        
                    <thead>
                        <tr>

                            <div class="div-image">    
                                <th><img src="{{ asset('storage/cafe-patisserie.jpg')}}" alt=""></th>
                                <th>
                                    <h3>Venha conhecer o melhor do café brasileiro.</h3>
                                </th>
                            </div>

                        </tr>


                    </thead>
                    
                    </table>
                </section>
            </li>

    



        </ul>

    </div>
</x-app-layout>
