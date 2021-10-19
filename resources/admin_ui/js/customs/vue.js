
import MenuManage from "../components/MenuManage/MenuManage";
import VueI18n  from 'vue-i18n';
Vue.use(VueI18n);
export const i18n = new VueI18n({
    locale: 'kr',
    fallbackLocale: 'kr'
})

const app = new Vue({
    el: '#Vue',
    components: {
        MenuManage
    }
});
