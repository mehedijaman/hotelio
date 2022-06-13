@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <a href="/hotel/create" class="btn btn-primary">Add to Bank</a>
    <!--Table-->
    <div class="table col-md-12">
        <table class="table table-striped w-auto ">

            <!--Table head-->
            <thead>
              <tr>
                <th>id</th>
                <th>Name</th>
                <th>Title</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>RegNO</th>
                <th>Logo</th>
                <th>Photo</th>
              </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody>
              <tr class="table-info">
                <th scope="row">1</th>
                <td>Kate</td>
                <td>Moss</td>
                <td>USA</td>
                <td>New York City</td>
                <td>Web Designer</td>
                <td>23</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Anna</td>
                <td>Wintour</td>
                <td>United Kingdom</td>
                <td>London</td>
                <td>Frontend Developer</td>
                <td>36</td>
              </tr>
              <tr class="table-info">
                <th scope="row">3</th>
                <td>Tom</td>
                <td>Bond</td>
                <td>Spain</td>
                <td>Madrid</td>
                <td>Photographer</td>
                <td>25</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Jerry</td>
                <td>Horwitz</td>
                <td>Italy</td>
                <td>Bari</td>
                <td>Editor-in-chief</td>
                <td>41</td>
              </tr>
              <tr class="table-info">
                <th scope="row">5</th>
                <td>Janis</td>
                <td>Joplin</td>
                <td>Poland</td>
                <td>Warsaw</td>
                <td>Video Maker</td>
                <td>39</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Gary</td>
                <td>Winogrand</td>
                <td>Germany</td>
                <td>Berlin</td>
                <td>Photographer</td>
                <td>37</td>
              </tr>
              <tr class="table-info">
                <th scope="row">7</th>
                <td>Angie</td>
                <td>Smith</td>
                <td>USA</td>
                <td>San Francisco</td>
                <td>Teacher</td>
                <td>52</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>John</td>
                <td>Mattis</td>
                <td>France</td>
                <td>Paris</td>
                <td>Actor</td>
                <td>28</td>
              </tr>
              <tr class="table-info">
                <th scope="row">9</th>
                <td>Otto</td>
                <td>Morris</td>
                <td>Germany</td>
                <td>Munich</td>
                <td>Singer</td>
                <td>35</td>
              </tr>
            </tbody>
            <!--Table body-->


          </table>
          <!--Table-->
    </div>

</div>
@endsection
