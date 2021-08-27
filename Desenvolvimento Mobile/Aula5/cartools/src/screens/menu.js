import React from 'react';
import { StyleSheet, Text, SafeAreaView, Image } from 'react-native';
import fonts from '../styles/fonts';

export function Menu() {
  return (
    <SafeAreaView style={styles.container}>
            <Text style={styles.texto}>
                Sing in
            </Text>
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: 'white',
    alignItems: 'center',
    justifyContent: 'top',
  },
  texto: {
    color: 'black',
    fontWeight: '600',
    fontFamily: fonts.titulo
  }
});
