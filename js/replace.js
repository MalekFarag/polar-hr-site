

function renderLatex(target, textToRender, latex) {
    if (!latex) {
      target.innerHTML = textToRender;
      return;
    }
      
    //try {
     /* katex.render(textToRender, target, {
        throwOnError: true,
      });*/
      //target.innerHTML = katex.renderToString(textToRender, {
       // throwOnError: false
    //});
    //}
   // catch (err) {
      target.innerHTML = textToRender//.replace("\\text", "").replace("{", "").replace("}", "").replace("\\int_", "").replace("\\", "");
    //}
  }
  
  function AnimatedText(target, texts, changeInterval, updateInterval, onTextChanged, latex) {
    var currentText = parseInt(Math.random() * texts.length);
    var areaText = texts[0];
  
    onTextChanged(target, areaText, latex);
  
    this.t1 = setInterval(function () {
      var c = parseInt(Math.random() * Math.max(texts[currentText].length, areaText.length));
      var s = texts[currentText][c];
  
      if (typeof s == 'undefined') s = " ";
  
      while (areaText.length < c) areaText += " ";
      var newText = (areaText.slice(0, c) + s + areaText.slice(c + 1)).trim();
      var diff = !(newText == areaText);
      areaText = newText;
  
      let textToRender = areaText.length == 0 ? "&nbsp;" : areaText;
  
      if (onTextChanged && diff) onTextChanged(target, textToRender, latex);
  
  
    }.bind(this), updateInterval ? updateInterval : 50);
  
    this.t2 = setInterval(function () {
      currentText = parseInt(Math.random() * texts.length);
    }.bind(this), changeInterval ? changeInterval : 4000);
  }
  AnimatedText.prototype = {
    constructor: AnimatedText,
    stop: function () { clearInterval(this.t1); clearInterval(this.t2); }
  };
  
  
  const targets = document.querySelectorAll('.replace');
  let targetsName = [
    ['Teachers', 'Professors', 'Tutors', 'Colleges', 'Universities'],
    [
    String.raw`Solve : ∫(t²-1)(4+3t) dt`, 
    String.raw`Solve : ∫4x³ + 3x² + 1`, 
    String.raw`Find all real roots of x⁴ + 4x³ + 3x²`,
    String.raw`Calculate the derivative of 4log(2x)`,
    String.raw`Calculate the derivative of (3x)/2 + 4`,
    String.raw`Calculate the derivative of sin²(x)`,
  ],
    ['Teachers', 'Professors', 'Tutors', 'Colleges', 'Universities'],
  ]
  
  let time1 = [
    5000,
    7000,
    5000
  ]
  
  let time2 = [
    10,
    5,
    10
  ]
  
  
  let i;
  window.addEventListener('load', function () {
    for (i = 0; i < targets.length; i++) {
      new AnimatedText(targets[i], targetsName[i], time1[i], time2[i], renderLatex, targets[i].classList.contains("latex"))
    }
  })
  
  //0 = hero
  // window.addEventListener('load', function(){
  
  //     new AnimatedText(targets[0], ['Teachers', 'Professors', 'Tutors', 'Colleges', 'Universities'], 5000, 10)
  // });
  
  // //1 = approach questions
  // window.addEventListener('load', function(){
  //     new AnimatedText(targets[1], ['Find the tangent line of f(x) at point x=a', 'Calculate the rate of change using the definition of a derivative', 'What is the domain of function f(x)', 'Find the derivitive of f(x)'], 7000, 5)
  // });
  
  // //2 = for teachers...
  // window.addEventListener('load', function(){
  //     new AnimatedText(targets[2], ['Teachers', 'Professors', 'Tutors', 'Colleges', 'Universities'], 5000, 10)
  // });
  
  
  
  //waypoints.js
  
  //header
  let headerTar = document.querySelector('.head');
  var waypoint = new Waypoint({
    element: document.querySelector('.waypoint'),
    handler: function (direction) {
      // console.log('toggled');
      headerTar.classList.toggle('topHead');
    }
  });
  
  let headerTar2 = document.querySelector('.mainHeader');
  var waypoint = new Waypoint({
    element: document.querySelector('.waypoint'),
    handler: function (direction) {
      // console.log('toggled');
      headerTar2.classList.toggle('topHead2');
    }
  });
  