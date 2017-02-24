@extends('layouts.default')
@section('content')
    <h1>Contractor</h1>
    <div class="empl-photo">
      <img class="img-circle" src="img/jorickvos.jpg">
    </div>
    <div class="empl-info">
      <p>
        Company: High Zealand Pipelines
      </p>
      <p>
        Name: Jorick Vos
      </p>
      <p>
        Function: Contractor
      </p>
      <p>
        Current Project: Special Process Operations 2.0
      </p>
    </div>
    <div class="lined">
      <table>
        <h2>Employees available</h2>
        <tr class="bold">
          <td>
            Name
          </td>
          <td>
            Function
          </td>
          <td>
            Location
          </td>
          <td>
            Job
          </td>
          <td>
            Available
          </td>
        </tr>
        <tr>
          <td>
            A. Bil
          </td>
          <td>
            Welder
          </td>
          <td>
            Oil Pump
          </td>
          <td>
            Weld Something
          </td>
          <td>
            Yes
          </td>
        </tr>
        <tr>
          <td>
            <a href="/employee">D. de Waard</a>
          </td>
          <td>
            <a href="/workschedule">Welder</a>
          </td>
          <td>
            Oil Pump
          </td>
          <td>
            Weld Something
          </td>
          <td>
            Yes
          </td>
        </tr>
        <tr>
          <td>
            M. Beckers
          </td>
          <td>
            Welder
          </td>
          <td>
            Oil Pump
          </td>
          <td>
            Weld Something
          </td>
          <td>
            Yes
          </td>
        </tr>
        <tr>
          <td>
            J.I. Cijsouw
          </td>
          <td>
            Welder
          </td>
          <td>
            Oil Pump
          </td>
          <td>
            Weld Something
          </td>
          <td>
            Yes
          </td>
        </tr>
        <tr>
          <td>
            B. Schollema
          </td>
          <td>
            Cleaner
          </td>
          <td>
            Oil Pump
          </td>
          <td>
            Clean Something
          </td>
          <td>
            Yes
          </td>
        </tr>
      </table>
      <table>
        <h2>Projects</h2>
        <tr>
          <td>
            Name
          </td>
          <td>
            Location
          </td>
          <td>
            Payment
          </td>
        </tr>
        <tr>
          <td>
            Special Process Operations 2.0
          </td>
          <td>
            North
          </td>
          <td>
            Hourly
          </td>
        </tr>
        <tr>
          <td>
            Hydrocracker
          </td>
          <td>
            West
          </td>
          <td>
            Fixed price
          </td>
        </tr>
        <tr>
          <td>
            Safely Cleaning
          </td>
          <td>
            West
          </td>
          <td>
            Hourly
          </td>
        </tr>
      </table>
    </div>

@stop
