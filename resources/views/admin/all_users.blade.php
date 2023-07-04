<!-- users.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
    @include('imports.imports')
                @yield('content')
    <style>
        body{
            background-color: #E0E7E9;
        }
        div{
            text-align: center;
            font-weight:bold;
        }
        h1{
            text-align: center;
            color: ;
        }
        table {
            border-collapse: collapse;
            width: 600px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
        tr th{
            background-color: #40867d;
            text-align: center;
        }
        tr td{
            background-color: #aeb5b7;
            text-align: center;
        }
        tr{
            border-radius:10%;
        }
        th,  td {
            border: 0px solid black;
            padding: 5px;
            width: border-box;
            text-align: center;
        }
        td input {
            width:100%
        }
        a:last-child {
            color: #5c5c5c;
        }
    </style>
    <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
</head>
<body calss="antialiased">
    <div>
        <h1>Users Details</h1>
    </div>
    <hr style="border: 1px dashed #8e5c6a;">
    
    <div>
        <a href="{{ route('/home') }}" >Dashboard  </a>  >  <a href="{{ route('/admin/espace_admin')}}" >  Admin Profile  </a>  >  <span style='text-decoration:underline'>  Détails Utilisateurs</span>
    </div>
    <br>
    @if(session('fail'))
        <div class="alert alert-danger" >
            {{ session('fail') }}
        </div>
    @elseif(session('success_update'))
        <div class="alert alert-success">
            {{ session('success_update') }}
        </div>
    @elseif(session('success_delete'))
        <div class="alert alert-success">
            {{ session('success_delete') }}
        </div>
    @endif
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th colspan="2"></th>
                    
                </tr>
            </thead>
            <tbody class="t_body">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Confirmed</th>
                    <th colspan="2">Action</th>
                </tr>
                @foreach ($users as $user)
                <form class="f1" action="{{ route('/admin/updateUser',$user->id) }}" method="POST" >
                    @csrf
                    @method('PUT')
                    <tr>
                        <td>
                            <input type="text" name="name" value="{{ $user->name }}">
                        </td>
                        <td>
                            <input type="email" name="email" value="{{ $user->email }}" disabled>
                        </td>
                        <td>
                            <input type="checkbox" name="is_confirmed" value="1" {{ $user->is_confirmed ? 'checked' : '' }}>
                        </td>
                        <td >
                            <button type="submit" name="action" value="update_this" onclick="return confirmUpdate(event,'Updates warning !')">Update</button>
                        </td>
                </form>
                        <td>
                            <form action="{{ route('/admin/deleteUser', $user->id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="action" value="delete" onclick="return confirmDelete(event,'Deleting warning !')">Supprimer</button> 
                            </form>
                        </td>
                    </tr>
                
                @endforeach
            </tbody>
        </table>
</body>
<script>
    function confirmDelete(event,confirmationTitle) {
        if (!window.confirm(confirmationTitle+ '\nAre you sure you want to delete this user ?')) {
            event.preventDefault(); // Prevent form submission
            return false; // Return false to cancel the form submission
        }
        return true; // Return true to allow the form submission
    }
    function confirmUpdate(event,confirmationTitle) {
        if (!window.confirm(confirmationTitle+ '\nAre you sure you want to save this user updates ?')) {
            event.preventDefault(); // Prevent form submission
            return false; // Return false to cancel the form submission
        }
        return true; // Return true to allow the form submission
    }
</script>
</html>
