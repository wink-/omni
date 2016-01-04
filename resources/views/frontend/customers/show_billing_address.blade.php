    <h1>Billing Information</h1>
    <div class="table-responsive">    
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Code</th><th>Name</th><th>Billing Address</th><th>City</th><th>State</th><th>Zip</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{ $customer->CUSTCODE }} </td>
                    <td> {{ $customer->CUSTNAME }} </td>
                    <td> {{ strlen($customer->ADDRESS3) > 3 ? $customer->ADDRESS3 : $customer->ADDRESS1}}</td>
                    <td> {{ $customer->CITY }} </td>
                    <td> {{ $customer->STATE }} </td>
                    <td> {{ $customer->ZIP }} </td>
                </tr>
            </tbody>
        </table>        
    </div>