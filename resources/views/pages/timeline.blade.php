@extends("layouts.app", [
  'class' => '',
   'namePage' => 'Timeline',
   'activePage' => 'timeline',
   'activeNav' => 'pages',
])

@section("content")
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="header text-center">
      <h3 class="title">{{ __('Timeline') }}</h3>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card card-timeline card-plain">
          <div class="card-body">
            <ul class="timeline">
              <li class="timeline-inverted">
                <div class="timeline-badge danger">
                  <i class="now-ui-icons objects_planet"></i>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <span class="badge badge-danger">{{ __('Some Title') }}</span>
                  </div>
                  <div class="timeline-body">
                    <p>{{ __("Wifey made the best Father's Day meal ever. So thankful so happy so blessed. Thank you for making my family We just had fun with the “future” theme !!! It was a fun night all together ... The always rude Kanye Show at 2am Sold Out Famous viewing @ Figueroa and 12th in downtown.") }}</p>
                  </div>
                  <h6>
                    <i class="ti-time"></i> {{ __('11 hours ago via Twitter') }}
                  </h6>
                </div>
              </li>
              <li>
                <div class="timeline-badge success">
                  <i class="now-ui-icons shopping_tag-content"></i>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <span class="badge badge-success">{{ __('Another One') }}</span>
                  </div>
                  <div class="timeline-body">
                    <p>{{ __('Thank God for the support of my wife and real friends. I also wanted to point out that it’s the first album to go number 1 off of streaming!!! I love you Ellen and also my number one design rule of anything I do from shoes to music to homes is that Kim has to like it....') }}</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-badge info">
                  <i class="now-ui-icons shopping_delivery-fast"></i>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <span class="badge badge-info">{{ __('Another Title') }}</span>
                  </div>
                  <div class="timeline-body">
                    <p>{{ __('Called I Miss the Old Kanye That’s all it was Kanye And I love you like Kanye loves Kanye Famous viewing @ Figueroa and 12th in downtown LA 11:10PM') }}</p>
                    <p>{{ __("What if Kanye made a song about Kanye Royère doesn't make a Polar bear bed but the Polar bear couch is my favorite piece of furniture we own It wasn’t any Kanyes Set on his goals Kanye") }}</p>
                    <hr>
                  </div>
                  <div class="timeline-footer">
                    <div class="dropdown">
                      <button type="button" class="btn btn-round btn-info dropdown-toggle" data-toggle="dropdown">
                        <i class="now-ui-icons design_bullet-list-67"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">{{ __('Action') }}</a>
                        <a class="dropdown-item" href="#">{{ __('Another action') }}</a>
                        <a class="dropdown-item" href="#">{{ __('Something else here') }}</a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-badge warning">
                  <i class="now-ui-icons ui-1_email-85"></i>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <span class="badge badge-warning">{{ __('Another One') }}</span>
                  </div>
                  <div class="timeline-body">
                    <p>{{ __("Tune into Big Boy's 92.3 I'm about to play the first single from Cruel Winter also to Kim’s hair and makeup Lorraine jewelry and the whole style squad at Balmain and the Yeezy team. Thank you Anna for the invite thank you to the whole Vogue team") }}</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection