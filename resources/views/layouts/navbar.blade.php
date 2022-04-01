
<nav class="navbar navbar-dark bg-dark justify-content-end">
    <a class="navbar-brand p-2 hover-profile" href= "/profile">
        <img src="https://www.gravatar.com/avatar?d=mm" width="30" height="30"
            class="d-inline-block align-top rounded-circle" alt="">
            <strong> {{Auth::user()->first_name ?? "Login"}} </strong>
    </a>
</nav>
