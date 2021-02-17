<li class='dropdown'>
  <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
    Assumptions
  </a>
  <ul class='dropdown-menu' role='menu'>
    <li>
      <a href='{{url('/content/Assumptions')}}'>
        Assumptions
      </a>
    </li>
    <li>
      <a href='{{url('/content/LeadsAssumptions')}}'>
        Lead Generation Assumptions
      </a>
    </li>
    @if(Auth::user()->isPaid())
    <li>
      <a href='{{url('/content/TeamAssumptions')}}'>
        @if (Auth::user()->isTeamGroup())
        Team Assumptions
        @else
        Agent Assumptions
        @endif
      </a>
    </li>
    @endif
  </ul>
</li>
<li class='dropdown'>
  <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
    Models
  </a>
  <ul class='dropdown-menu' role='menu'>
    <li>
      @if (Auth::user()->isPaid())
      <a href='{{url('/content/BudgetModel')}}'>
        Budget Model
      </a>
      @endif
    </li>
    <li>
      <a href='{{url('/content/LeadGenerationModel')}}'>
        Lead Generation Model
      </a>
    </li>
    <li>
      <a href='{{url('/content/EconomicModelBuyers')}}'>
        Economic Model - Buyers
      </a>
    </li>
    <li>
      <a href='{{url('/content/EconomicModelSellers')}}'>
        Economic Model - Sellers
      </a>
    </li>
  </ul>
</li>
<li class='dropdown'>
  <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
    Worksheets
  </a>
  <ul class='dropdown-menu' role='menu'>
    @if(Auth::user()->isPaid())
    <li>
      <a href='{{url('/content/Annual411')}}'>
        Annual 4-1-1
      </a>
    </li>
    <li>
      <a href='{{url('/content/GoalTracking')}}'>
        Goal Tracking
      </a>
    </li>
    @endif
    <li>
      <a href='{{url('/content/LongTermPlanning')}}'>
        Long Term Planning Overview
      </a>
    </li>
  </ul>
</li>
@if(Auth::user()->isPaid())
<li class='dropdown'>
  <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
    Plans
  </a>
  <ul class='dropdown-menu' role='menu'>
    <li>
      <a href='{{url('/content/AnnualActionPlan')}}'>
        Annual Action Plan
      </a>
    </li>
    <li>
      <a href='{{url('/content/ThreeYearActionPlan')}}'>
        Three-Year Action Plan
      </a>
    </li>
    <li>
      <a href='{{url('/content/SomedayActionPlan')}}'>
        Someday Action Plan
      </a>
    </li>
  </ul>
</li>
@endif
<li class='dropdown'>
  <a onclick="javascript:window.print()" href='#' aria-expanded='false'>
    Print
  </a>
</li>
