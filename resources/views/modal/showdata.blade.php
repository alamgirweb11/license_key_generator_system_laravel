
  <!-- Modal -->
  <div class="modal fade" id="showDataModal" tabindex="-1" role="dialog" aria-labelledby="showDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="showDataModalLabel">Show All Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table-hover" style="width:100%">
              <thead>
                    <tr>
                        <th>Sl.</th> 
                        <th>Client Id: </th> 
                        <th>License Key: </th>
                        <th>Expire Date: </th>
                    </tr>
              </thead>
              <tbody>
                  @php($i=1)
                  @foreach($users as $user)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$user->client_id}}</td>
                    <td>{{$user->license_key}}</td>
                    <td>{{$user->expire_date}}</td>
                  </tr>
                  @endforeach 
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>