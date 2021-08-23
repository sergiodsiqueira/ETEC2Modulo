import React from 'react'
import { StyleSheet, Text, SafeAreaView, Image } from 'react-native'

export function Welcome() {
  return (
    <SafeAreaView style={styles.container}>
      <Text style={styles.titulo}>WELCOME</Text>

      <Image
        source={{
          uri: 'https://c1.wallpaperflare.com/preview/200/862/475/black-background-audi.jpg'
        }}
        style={styles.imglogo}
      />

      <Text style={styles.next}>NEXT PAGE</Text>
    </SafeAreaView>
  )
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    height: 250,
    backgroundColor: 'black',
    marginBottom: 3
  },
  titulo: {
    fontSize: 25,
    color: 'gray',
    fontWeight: 'bold'
  },
  next: {
    fontSize: 10,
    color: 'white',
    fontWeight: 'bold',
    backgroundColor: '#111012',
    padding: 10
  },
  imglogo: {
    width: 250,
    height: 250,
    borderRadius: 100,
    marginTop: 5
  }
})
