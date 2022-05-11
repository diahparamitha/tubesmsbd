<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @can('isAdmin')
                        Selamat datang Admin {{ auth()->user()->name }}
                    @elsecan('isGuru')
                        Selamat datang Guru {{ auth()->user()->name }}
                    @elsecan('isSiswa')
                        Selamat datang Siswa {{ auth()->user()->name }}
                    @endcan
                </div>
                <form action="/logout" method="post">
                         {{csrf_field()}}
                        <button type="submit" class="btn btn-info dropdown-item">Logout</button>
                      </form>
            </div>
        </div>
    </div>
</div>