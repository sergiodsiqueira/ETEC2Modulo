import { StyleSheet } from 'react-native'

const styles = StyleSheet.create({
  container: {
    backgroundColor: 'white',
    flex: 1,
    padding: 10
  },

  viewTitulo: {
    backgroundColor: 'white'
  },

  titulo: {
    textAlign: 'center',
    color: 'black',
    fontSize: 30,
    fontWeight: 'bold',
    marginBottom: 20
  },

  lblInputs: {
    marginLeft: 35,
    marginRight: 20,
    color: 'black',
    fontSize: 15
  },

  input: {
    marginBottom: 25,
    marginLeft: 20,
    marginRight: 20,
    backgroundColor: 'white',
    borderRadius: 30,
    borderColor: 'lavender',
    borderWidth: 1,
    fontSize: 20,
    height: 40,
    padding: 8,
    paddingTop: 2
  },

  txtbtnCalcular: {
    color: 'white'
  },

  btnCalcular: {
    backgroundColor: 'mediumpurple',
    marginTop: 25,
    marginLeft: 20,
    marginRight: 20,
    justifyContent: 'center',
    borderRadius: 30,
    alignItems: 'center',
    height: 60
  },

  lblResultado: {
    marginTop: 50,
    marginLeft: 35,
    marginRight: 20,
    color: 'mediumpurple',
    fontSize: 15,
    textAlign: 'center'
  }
})

export default styles
