function setHref(href){
  document.querySelector('link').setAttribute('href', href);
}
function setValue(value){
  document.querySelector('input').setAttribute('value', value);
}

function cookieCheck(){
  if(document.cookie === "name=night"){
    setHref('night.css');
    setValue('day');
  } else {
    setHref('day.css');
    setValue('night');
  }
}

function nightDayChanger(self){
  if(self.value === 'night'){
    setHref('night.css');
    document.cookie = "name=night";
    self.value = 'day';
  } else{
    setHref('day.css');
    document.cookie = "name=day";
    self.value = 'night';
  }
}

function changeValueByName(name, value){
  document.getElementsByName(name).setAttribute('value', value);
}
