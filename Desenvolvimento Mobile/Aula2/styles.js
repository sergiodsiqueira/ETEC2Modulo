import { StyleSheet } from 'react-native'

const styles = StyleSheet.create({
  container: {
    backgroundColor: 'white',
    flex: 1,
    padding: 10
  },

  viewTitulo: {
    alignItems: 'center',
    backgroundColor: 'white'
  },

  Logo: {
    height: 40,
    width: 40
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
    fontSize: 23,
    textAlign: 'center',
    marginBottom: 20
  },

  item: {
    alignItems: 'center',
    backgroundColor: 'mediumpurple',
    flexGrow: 1,
    margin: 4,
    padding: 20,
    flexBasis: 0
  },
  text: {
    color: 'white'
  }
})

export default styles
