<ul>
    <li><a href="home"> &nbsp;&nbsp; Dashboard </a></li>
    <li><a href="residents"> &nbsp;&nbsp; List of Residents </a></li>
    <li><a href="documents">&nbsp;&nbsp; Barangay Certificate </a></li>
    <li><a href="reports"> &nbsp;&nbsp; Blotter Record </a></li>
    <li><a href="officials"> &nbsp;&nbsp; Brgy Officials | Staff </a></li>
    <li><a href="visionmission"> &nbsp;&nbsp; Mission | Vision  </a></li>
    <li><a href="settings"> &nbsp;&nbsp; Administrator </a></li>
</ul>


<form method="POST" action="{{ route('logout') }}">
    @csrf
    <a href="{{route('logout')}}" onclick="event.preventDefault();
                        this.closest('form').submit();">
        <div class="logout">
            <ion-icon name="log-out-outline"></ion-icon>
        </div>
        <p>LOG OUT</p>
    </a>
</form> <!-- oks na -->