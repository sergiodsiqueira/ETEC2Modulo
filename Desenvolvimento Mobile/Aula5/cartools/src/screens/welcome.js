import React from 'react';
import { StyleSheet, Text, SafeAreaView, Image, TouchableOpacity } from 'react-native';
import {AntDesign} from '@expo/vector-icons';

export function Welcome() {
  return (
    <SafeAreaView style={styles.wrapper}>
        <Image source={require('../assets/title.png')}
        style={styles.logotipo1}/>
        
        <Image source={require('../assets/simbol1.png')}
        style={styles.logotipo2}/>

        <Image source={require('../assets/simbol2.png')}
        style={styles.logotipo3}/>

        <TouchableOpacity style={styles.botao}>
            <AntDesign name='login' style={{fontSize: 24}}/>
            <Text style={styles.botaotexto}>
                Sing in
            </Text>
        </TouchableOpacity>
    </SafeAreaView>
  );
}

const styles = StyleSheet.create({
  wrapper: {
    flex: 1,
    backgroundColor: '#81DC60',
    alignItems: 'center',
    justifyContent: 'top',
  },
  logotipo1: {
    //height: Dimensions.get('window').width * 0.3
    width: 150,
    height: 80,
    marginTop: 100,
    marginBottom: 100,
    resizeMode: 'center',
  },
  logotipo2: {
    width: 150,
    height: 50,
    marginBottom: 80,
    resizeMode: 'center',
  },
  logotipo3: {
    width: 150,
    height: 80,
    marginBottom: 120,
    resizeMode: 'center',
  },
  botao: {
    padding: 10,
    flexDirection: 'row',
    justifyContent: 'center',
    alignItems: 'center',
    borderRadius: 30,
    backgroundColor: 'white',
    width: 160,
    height: 40
  },
  botaotexto: {
    color: 'black',
    fontWeight: '600',
  }
});
