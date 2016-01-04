##Project Work Flow

### Crud Generator

Generate your crud. View generate.md for more instruction.
```
php artisan crud:generate Posts --fields="title:string, body:text"
```
#### Model
Move model to Models folder.

Update namespace to 
```
namespace App/Models
```

Add primary key
```
protected $primaryKey = 'ID';
```
#### Controller
Move controller to App/Http/Controllers/Frontend
Update namespace to 
```
namespace App\Http\Controllers\Frontend;
```
Update the proper model namespace
```
use App\Models\Customer;
```

#### Views
Go through each view and make sure it is using the correct primary key for the id. It defaults to id.