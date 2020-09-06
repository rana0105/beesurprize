<template>
	<div>
    <!-- <a class="btn default-btn" @click="savePost(posts)" :href="baseUrlPath + '/checkout'">Confirm</a> -->
    <button class="btn default-btn" @click="savePost(posts)" :href="baseUrlPath + '/checkout'">Confirm</button>
	</div>
</template>
<script>
	import axios from 'axios';
	import {mapActions, mapGetters} from 'vuex';
  export default {

    data () {
      return {
        baseUrlPath: ''
      }
    },
    mounted () { 
      this.baseUrlPath = window.axios.defaults.baseURL;
    },

    methods:{

      ...mapActions({
              addContest: 'cart/addContest',
              allContestRemove: 'cart/allContestRemove',
              allTicketRemove: 'cart/allTicketRemove'
          }),

      savePost (allpost) {
        console.log(allpost);
        // axios.post('/allpostsave/', { data: {posts: allpost}})
        // .then(response => {
        //   this.allpostsave = response.data
        // })
        // .catch(err => {
        //   console.log(err)
        // })
      }
    },

	  computed: {
	  	...mapGetters({
	  		contests: 'cart/contests',
	  	}),

  	posts () {
  		var resArr = [];
			this.contests.forEach(function(item){
			  var i = resArr.findIndex(x => x.id == item.post_id);
			  if(i <= -1){
			    resArr.push({id: item.post_id, title: item.title, image: item.image, contest_no:item.contest_no, price:item.price, ticket_no: [item.ticket_no] });
			  } else {
			  	resArr[i].ticket_no.push(item.ticket_no);
			  }

			});

			return resArr;
		  }
	  }
  };
</script>
<style>
	a.addcart {
		color: red;
	}
</style>
