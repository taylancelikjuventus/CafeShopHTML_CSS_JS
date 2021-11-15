<!DOCTYPE html>
<!--
HERE we created 4 tables on page.
1.With first table ,user can select meals 
2.With second table ,user can select drinks
3.User press 'Add' button
4.A new table containing selected itemname,price,quantity and total is filled by
  JQuery script.
5.The total price is added to last table o the most right side of page.
-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Deneme</title>
        <link rel='stylesheet' href='bootstrap-4.0.0-dist/css/bootstrap.min.css'>
        <script src='bootstrap-4.0.0-dist/js/bootstrap.min.js'></script>

    </head>
    <body>

        <!--Navigation bar-->
        <!--Built-in classes sets both colors and positions of elements-->
        <nav class="navbar navbar-dark bg-dark">
            <!--brand of nav bar-->
            <span class="navbar-brand md-0 h1">Coffee Shop</span>
        </nav> 
        <div class='row'>
            <div class='col-sm-3'>
                <div class='container' style='border:1px solid red;'>
                    <div class='list-group-item list-group-item-action active'>
                        Item
                    </div>
                    <div class='bg-dark' style='color:white;'>
                        <form id='tbl-project'>
                            <table class='table table-bordered' style='color:white'>
                                <tr>
                                    <td>
                                        <input type='checkbox' name='pos' value='Nuggets Fries'>
                                        <label>Nuggets Fries</label>
                                    </td>  
                                    <td>
                                        <input type='number' name='qty' id='qty' size="15">
                                    </td>  
                                </tr>  

                                <tr>
                                    <td>
                                        <input type='checkbox' name='pos' value='Village Fries'>
                                        <label>Village Fries</label>
                                    </td>  
                                    <td>
                                        <input type='number' name='qty' id='qty' size="15">
                                    </td>  
                                </tr>  

                                <tr>
                                    <td>
                                        <input type='checkbox' name='pos' value='Fries'>
                                        <label>Fries</label>
                                    </td>  
                                    <td>
                                        <input type='number' name='qty' id='qty' size="15">
                                    </td>  
                                </tr>  


                            </table>
                        </form>
                    </div>
                </div>

            </div>
            <!-----Drinks------>
            <div class='col-sm-3'>
                <div class='container' style='border:1px solid red;'>
                    <div class='list-group-item list-group-item-action active'>
                        Drinks
                    </div>
                    <div class='bg-dark' style='color:white;'>
                        <form id='tbl-project'>
                            <table class='table table-bordered' style='color:white'>
                                <tr>
                                    <td>
                                        <input type='checkbox' name='pos' value='Tea'>
                                        <label>Tea</label>
                                    </td>  
                                    <td>
                                        <input type='number' name='qty' id='qty' size="15">
                                    </td>  
                                </tr>  

                                <tr>
                                    <td>
                                        <input type='checkbox' name='pos' value='Coffee'>
                                        <label>Coffee</label>
                                    </td>  
                                    <td>
                                        <input type='number' name='qty' id='qty' size="15">
                                    </td>  
                                </tr>  

                                <tr>
                                    <td>
                                        <input type='checkbox' name='pos' value='Apple Juice'>
                                        <label>Apple Juice</label>
                                    </td>  
                                    <td>
                                        <input type='number' name='qty' id='qty' size="15">
                                    </td>  
                                </tr>  
                                <tr>
                                    <td>
                                        <input type='checkbox' name='pos' value='Orange Juice'>
                                        <label>Orange Juice</label>
                                    </td>  
                                    <td>
                                        <input type='number' name='qty' id='qty' size="15">
                                    </td>  
                                </tr>  
                                <!--Button-->
                                <tr>
                                    <td colspan="3" align='right'>
                                        <input type='button'  value='Add' onclick='add();' class='btn btn-info'>
                                    </td>  

                                </tr>  


                            </table>
                        </form>
                    </div>
                </div>

            </div>




            <!-----Table shows quantity,selected items and prices------->
            <div class='col-sm-4'>
                <div class='container' style='border:1px solid red;'>
                    <div class='list-group-item list-group-item-action active'>
                        Item
                    </div>

                    <table id='tbl-item' class='table table-dark table-bordered'
                           cellspacing='0' cellpadding='0' width='100%' align='center'>

                        <thead>
                            <tr>
                                <th>Delete</th>
                                <th>Item</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>

                        <!---Bu kısma JS ten button eklenecek---->   
                        <tbody>



                        </tbody>


                    </table>  


                </div> 
            </div>
            <!--En sagdaki toplamı gösteren div--->
            <div class='col-sm-2'>
                <div class='list-group-item list-group-item-action active'>Total</div>
                <div>
                    <input type='text' id='total' name ='total' style='color:yellow;background: black;size:30;'>
                </div>
                <div>
                    <input type='button' id='reset' name ='reset' value='reset' class='btn btn-warning'>
                </div>

            </div>

        </div>        

        <script src='jquery.js'></script>
        <script>
       var tot = 0;
                                            var total = 0;
                                            function add() {
                                               //selects all input items with name='pos'
                                               //and apply anonymous function to al of them
                                                $("input[name='pos']:checked").each(function () {
                                                    //this means current item
                                                    let check = $(this).val();
                                                    var price = 0;

                                                    if (check == 'Nuggets Fries') {
                                                        price = 12;
                                                    }
                                                    if (check == 'Village Fries') {
                                                        price = 15;
                                                    }
                                                    if (check == 'Fries') {
                                                        price = 20;
                                                    }
                                                    if (check == 'Tea') {
                                                        price = 5;
                                                    }
                                                    if (check == 'Tea') {
                                                        price = 2;
                                                    }
                                                    if (check == 'Coffee') {
                                                        price = 5;
                                                    }
                                                    if (check == 'Apple Juice') {
                                                        price = 3.5;
                                                    }
                                                    if (check == 'Orange Juice') {
                                                        price = 4;
                                                    }
                                                    //current item e en yakın tr dan quantity degerini bulur. 
                                                    //closest() şu anki itemden yukarı dogru yani parent'e dogru çıkar.
                                                    var qty = $(this).closest('tr').find('[name="qty"]').val() || 0;
                                                    tot = qty * price;
                                                    //this table1 will add all selected items' name,price,quantity and total
                                                    var table1 =
                                                            "<tr>" +
                                                            "<td><button type='button' name='record' class='btn btn-warning' onclick=deleterow(this)>Delete</button></td>" +
                                                            "<td>" + check + "</td>" +
                                                            "<td>" + price + "</td>" +
                                                            "<td>" + qty + "</td>" +
                                                            "<td>" + tot + "</td>" +
                                                            "</tr>";

                                                    total += Number(tot);
                                                    $('#total').val(total);
                                                   //table ı formdaki boş olan <tbody> e ekler
                                                    $('#tbl-item tbody').append(table1);

                                                });

                                            }


                                            //delete function
                                            function deleterow(e) {
                                                /*silmeden önce butonun parentinin parenti içindeki son td bulunuyor
                                                 *Ve 10 tabanında integer a cevriliyor.Yani bulunan şey total.
                                                 *parseInt() in ikinci parametresi 10 tabanında demek.
                                                 *  */
                                                total_cost = parseInt($(e).parent().parent().find('td:last').text(), 10);
                                                total -= total_cost; //silinecek satırın fiyatı toplamdan düşürülüyor
                                                $('#total').val(total);//En sagdaki #total idli toplamı gösteren div in
                                                //fiyatı güncelleniyor
                                                $(e).parent().parent().remove();//seçilen row siliniyor.


                                            }


                                            //reset function
                                            $('#reset').click(function () {

                                                location.reload(); //clears selected all selected items in table
                                            });
                                     
        </script>


    </body>
</html>
