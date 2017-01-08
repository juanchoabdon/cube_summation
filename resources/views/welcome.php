<!DOCTYPE html>
<html ng-app="cubeSummation">
    <head>
        <title>Cube Summation</title>
       <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                color: black;
            }

            input {

            width: 200px;

            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .cube {
              margin-top: 130px;
            }

          fieldset {
            margin-bottom: 30px;
            margin-top: 20px;
          }


        </style>
    </head>
    <body>



      <nav>
        <div class="nav-wrapper deep-orange lighten-1">
          <a href="#" class="brand-logo center">Cube Summation</a>

        </div>
      </nav>




 <div class="container cube" ng-controller="MainController">


        <div class="row">


                <div  class="center col l12 s12 " >



                    <div class="input-field ">
              <input  type="number" ng-model="test_cases_num" min="1" max="50" ng-change="create_test_cases()"/>
              <label class="active" for="first_name2">Test Cases</label>
            </div>



                    <div ng-repeat="test_case in test_cases track by $index">
                        <fieldset class="form-group">
                            <legend>Test Case {{$index + 1}}</legend>


                            <div class="input-field ">
                      <input  id="m_n_{{$index}}" type="text" ng-model="test_case.m_n"  ng-change="set_m_n(test_case)"/>
                      <label class="active" for="m_n_{{$index}}">N M</label>
                    </div>
                            <div ng-repeat="operation in test_case.operations track by $index">


                              <div class="row">
                   <div class="input-field col s6">
                     <select id="op_{{$index}}" ng-model="operation.operation_name">

                       <option value="query">QUERY</option>
                       <option value="update">UPDATE</option>
    </select>
    <label for="op_{{$index}}">Operación</label>
                    </div>
                   <div class="input-field col s6">



                     <input id="params_{{$index}}" type="text" ng-model="operation.params" />
                        <label for="params_{{$index}}"> Parametro </label>
                      </div>
                       </div>

                            </div>
                        </fieldset>
                    </div>
                    <button ng-click="summation()" class="waves-effect waves-light btn deep-orange lighten-1"><i class="material-icons left">play_arrow</i>Calcular</button>

                    <fieldset class="form-group">
                        <legend> Output </legend>
                        <div ng-bind-html="output"></div>
                    </fieldset>
                </div>
</div>

</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.js"></script>

<script src="js/app.js"></script>
<script src="js/controllers/main.js"></script>
<script type="text/javascript">


$('select').material_select();



</script>
    </body>

</html>
