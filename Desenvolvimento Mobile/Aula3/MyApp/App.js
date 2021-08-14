import React from 'react'
import { StyleSheet, Text, SafeAreaView } from 'react-native'

//App
export default function App() {
  return (
    <>
      <SafeAreaView style={estilos.container}>
        <Text style={estilos.texto}>ETEC CPS I</Text>
        <Text style={estilos.texto}>ETEC CPS II</Text>
      </SafeAreaView>
    </>
  )
}

//Estilos
const estilos = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: 'white',
    alignItems: 'center',
    justifyContent: 'center'
  },
  texto: {
    color: 'red'
  }
})
