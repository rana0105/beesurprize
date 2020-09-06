<template>
	<div>
    <!-- <a class="btn default-btn" @click="savePost(posts)" :href="baseUrlPath + '/checkout'">Confirm</a> -->
    <span class="add-cart-icon" v-if="countProductWishlist(contestPass.id) < 1">
      <a @click="addtoWishlist(contestPass)"><i class="far fa-heart"></i></a>
    </span>
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
    props: ['contestPass'],
    mounted () { 
      this.baseUrlPath = window.axios.defaults.baseURL;
    },

    methods:{

      ...mapActions({
              addContest: 'cart/addContest',
              allContestRemove: 'cart/allContestRemove',
              allTicketRemove: 'cart/allTicketRemove',
              addProductWishlist: "wishlist/addProductWishlist"
          }),

      addtoWishlist(item) {
        console.log(item);
        this.addProductWishlist(item);
      },

      countProductWishlist(wid) {
        let pro = this.wproducts;
        if (!pro) {
          return 0;
        }
        for (var i = 0; i < pro.length; i++) {
          if (pro[i].wid == wid) {
            return pro[i].wcount;
          }
        }
        return 0;
      },

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
        wproducts: "wishlist/wproducts"
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
