<h1>Customer</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Code</th><th>Name</th><th>Physical Address</th><th>City</th><th>State</th><th>Zip</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{ $customer->CUSTCODE }} </td>
                    <td> {{ $customer->CUSTNAME }} </td>
                    <td> {{ $customer->ADDRESS1 }} </td>
                    <td> {{ $customer->CITY }} </td>
                    <td> {{ $customer->STATE }} </td>
                    <td> {{ $customer->ZIP }} </td>
                </tr>
            </tbody>
                <tr>
                    <th>Phone</th><th>Fax</th><th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{ $customer->PHONE1 }} </td>
                    <td> {{ $customer->FAX }} </td>
                    <td> {{ $customer->EMAIL }} </td>
                </tr>
            </tbody>
        </table>
        </div>