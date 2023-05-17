@include('components.layout')
<br>
<div class="container-md">
    @if (count($users) > 0)
    <div class="card">
        <div class="card-header">
            <div>
              <div>
                  <div class="row" align="center">
                      <div class="col-md-6">
                          <p>Usuarios</p>
                      </div>
                      <div class="col-md-6" align="right">
                          <a  class="btn btn-primary">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                              </svg>
                          </a>
                      </div>
                    </div>
              </div>

            </div>
          </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nome</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @else
    <div class="card">
        <div class="card-header">
          <div>
            <div>
                <div class="row" align="center">
                    <div class="col-md-6">
                        <p>Usuarios</p>
                    </div>
                    <div class="col-md-6" align="right">
                        <a  href="/users/create" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </a>
                    </div>
                  </div>
            </div>

          </div>
        </div>
        <div class="card-body">
          <p class="card-text">Nenhum usuário encontrado.</p>
        </div>
      </div>

    @endif

</div>
@include('components.footer')
