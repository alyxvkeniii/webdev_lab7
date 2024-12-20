@extends('Components.admin-nav')

@section('additional-styles')
    <link rel="stylesheet" href="/assets/css/my-recipe.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
    <style>
        /* Make buttons appear horizontally */
        .action-buttons {
            display: flex;
            gap: 10px; /* Adds space between the buttons */
        }
    </style>
@endsection

@section('content')
    <!--MY RECIPE SECTION-->
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Admin Dashboard</h2>
            <div class="tabs">
                <a href="/admin" class="created">All</a>
                <a href="/admin" class="created">Posts</a>
                <a href="/tags" class="created">Tags</a>
            </div>
            <div class="nav">
                <div class="item active">
                    <div class="icon">🔖</div>
                    <span><a href="/admin" class="created">Posts</a></span>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="content">
            <h1><b>Admin Dashboard</b></h1>

            <!-- Users Table -->
            <h2>Users Management</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role == 1 ? 'Admin' : 'User' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Recipe Management -->
            <h2>Recipe Management</h2>
            <!-- Recipe Table -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>User</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Ingredients</th>
                            <th>Instructions</th>
                            <th>Categories</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recipes as $recipe)
                            <tr>
                                <td>{{ $recipe->id }}</td>
                                <td>{{ $recipe->name }}</td>
                                <td>{{ $recipe->user ? $recipe->user->username : 'Unknown' }}</td>
                                <td><img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->name }}" width="50" height="50"></td>
                                <td>{{ Str::limit($recipe->description, 50) }}</td>
                                <td>{{ Str::limit($recipe->ingredients, 50) }}</td>
                                <td>{{ Str::limit($recipe->instructions, 50) }}</td>
                                <td>{{ $recipe->categories }}</td>
                                <td>
                                    <!-- Action buttons (Approve & Delete) -->
                                    <div class="action-buttons">
                                        <!-- Approve button with check icon -->
                                        <form action="{{ route('admin.approve', $recipe->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn btn-success" title="Approve">
                                                <i class="fas fa-check"></i> <!-- Font Awesome check icon -->
                                            </button>
                                        </form>

                                        <!-- Delete button with trash icon -->
                                        <form action="{{ route('admin.delete', $recipe->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" title="Delete">
                                                <i class="fas fa-trash"></i> <!-- Font Awesome trash icon -->
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--END OF MY RECIPE SECTION-->
@endsection
