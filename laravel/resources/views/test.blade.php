<div ng-app ng-init="qty=1;cost=2">
    <b>Invoice:</b>
    <div>
      Quantity: <input type="number" min="0" ng-model="qty">
    </div>
    <div>
      Costs: <input type="number" min="0" ng-model="cost">
    </div>
    <div>
      <b>Total:</b> {{qty * cost | currency}}
    </div>
  </div>