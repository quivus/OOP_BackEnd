<style>
     .main-container{
        position: absolute;
        background-color:none;
        height: 100vh;
        width: 80%;
        margin-left: 15%;
        padding-left: 3rem;
    }
    .main-container h1{
        font-size: 4em;
        padding-top: 2rem;
        font-weight: bold;
        color: pink;
    }
    .main-container label{
        font-size: 2em;
        font-weight: 600;
        color: gray;

    }
</style>
    @section('HomePage')
    <div>
        <div class="main-container">
            <h1>Dashboard</h1>
            <label for="">Welcome Back {{ Auth::user()->name}} !!</label>

            <div class="Cards">
                <div class="card">SOLD TODAY</div>
                <div class="card">SOLD TOAL</div>
                <div class="card">SALES</div>
            </div>
        </div>
    </div>
    @endsection
