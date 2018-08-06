<!-- the validate() method creates (if failed) an error variable (csl) -->
      <!-- here we list the error in the html of the page -->
      @if (count($errors))
        <div class = "form-group">
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error) <!-- available on every single view -->
                <li>
                {{ $error }}
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      @endif