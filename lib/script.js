function initDrag(){
    const wrapper = document.querySelectorAll(".tasklist");
    // const todo = document.querySelectorAll(".task");
    for(const wrap of wrapper) {
        new Sortable(wrap, {
          group: "sorting",
          sort: true
        });
    }
    //
    // for(const item of todo) {
    //     new Sortable(item, {
    //       group: "sorting",
    //       sort: true
    //     });
    // }

    const tasks = document.querySelectorAll('.tasklist__nested');
    for(let task of tasks) {
        new Sortable(task, {
          group: "nested",
          sort: true,
          animation: 150,
          filter: ".filtered",
          fallbackOnBody: true,
          swapThreshold: 0.65,
          onEnd: function(e) {
              // console.log("From Task: " + e.from.id);
              // console.log("To Task: " + e.to.id);
              // console.log("New Index: " + e.newIndex);
              // console.log("Value: " + e.item.attributes[1].value);
              // console.log("to: " + e.to.attributes[1].value);
              // console.log("from: " + e.from.attributes[1].value);
              //console.log(e);
              // if(e.item.previousSibling !== null) console.log("prev val: " + e.item.previousSibling.attributes[2].value);
              // if(e.item.nextSibling !== null)
              // {
              //     console.log("next val: " + e.item.nextSibling.attributes[2].value);
              //     console.log("next next val: " + e.item.nextElementSibling.attributes[2].value);
              // }
              var siblingCount = parseInt(e.item.parentElement.childElementCount);
              var siblings = e.item.parentElement.childNodes;
              var taskIndex = e.item.parentElement.attributes[1].value;
              var sorted = {
                  taskIndex: [],
                  dataId: [],
                  dataIndex: [],
              };
              for(let ctr = 0; ctr < siblingCount; ctr++)
              {
                  siblings[ctr].attributes[2].value = ctr + 1;
                  sorted.taskIndex.push(taskIndex);
                  sorted.dataId.push(siblings[ctr].attributes[1].value)
                  sorted.dataIndex.push(siblings[ctr].attributes[2].value)
              }
              console.log(sorted);

              jQuery.post();
          }
        });
    }
}
window.onload = initDrag;
