export default {
    user: {
      token: sessionStorage.getItem('TOKEN'),
      data: {}
    },
    products: {
      loading: false,
      data: [],
      links: [],
      from: null,
      to: null,
      page: 1,
      limit: null,
      total: null
    },
    users: {
      loading: false,
      data: [],
      links: [],
      from: null,
      to: null,
      page: 1,
      limit: null,
      total: null
    },
    customers: {
      loading: false,
      data: [],
      links: [],
      from: null,
      to: null,
      page: 1,
      limit: null,
      total: null
    },
    countries: [],
    orders: {
      loading: false,
      data: [],
      links: [],
      from: null,
      to: null,
      page: 1,
      limit: null,
      total: null
    },
    toast: {
      show: false,
      message: '',
      delay: 5000
    },
    dateOptions: [
      {key: '1d', text: 'Último dia'},
      {key: '1k', text: 'Semana Passada'},
      {key: '2k', text: 'Últimas 2 Semanas'},
      {key: '1m', text: 'Último Mês'},
      {key: '3m', text: '3 Meses'},
      {key: '6m', text: '6 Meses'},
      {key: 'all', text: 'Todo o Período'},
    ]
  }
  