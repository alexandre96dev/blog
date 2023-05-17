@include('components.layout')
    <br>
    <div class="container-md">
        <div class="card">
            <div class="card-header">
                <div>
                    <div>
                        <div class="row" align="center">
                            <div class="col-md-6">
                                <p>Criar Usuário</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Nome:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <br>
                    <div align="center">
                        <button type="submit" class="btn btn-primary">Criar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@include('components.footer')
