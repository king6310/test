function LimitDrag(id){
    Drag.call(this, id);
}

for (const key in Drag.prototype) {
    LimitDrag.prototype[key]=Drag.prototype[key];
}

LimitDrag.prototype.fnMove = function (ev) {
    var oEvent = ev || event;
    var l=oEvent.clientX - this.disX;
    var t=oEvent.clientY - this.disY;

    var w=document.documentElement.clientWidth||document.body.clientWidth;
    var h=document.documentElement.clientHeight||document.body.clientHeight;

    if(l<=0){
        l=0;
    }
    else if(l>=w-this.oDiv.offsetWidth)
    {
        l=w-this.oDiv.offsetWidth;
    }

    if(t<=0){
        t=0;
    }
    else if(t>=h-this.oDiv.offsetHeight)
    {
        t=h-this.oDiv.offsetHeight;
    }

    this.oDiv.style.left = l + 'px';
    this.oDiv.style.top = t + 'px';
}