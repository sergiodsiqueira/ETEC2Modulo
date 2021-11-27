import React, { useState } from "react";
import { StyleSheet, Text, View, Image, TouchableOpacity } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';

const Stack = createNativeStackNavigator();

function App() {
  return (
    <NavigationContainer>
      <Stack.Navigator initialRouterName='Home'>
        <Stack.Screen name='Home' component={HomeScreen} options={{ headerShown: false }} />
        <Stack.Screen name='Contador' component={ContadorScreen} options={{ headerShown: false }}/>
      </Stack.Navigator>
    </NavigationContainer>
  );
}

function HomeScreen({ navigation }) {
  return (
    <View style={styles.container}>

      <Image
        style={styles.imagem}
        source={{
          uri: 'https://somosilimitado.files.wordpress.com/2015/08/icon2x.png'
        }}
      />

      <Text style={styles.titulo}>COUNTER APP | BY SÉRGIO</Text>

      <>
        <TouchableOpacity
          style={styles.btnEntrar}
          onPress={() => navigation.navigate('Contador', {})}>
          <Text style={styles.btnEntrarTexto}>
            ENTRAR
          </Text>
        </TouchableOpacity>
      </>
    </View>
  )
}

function ContadorScreen({ navigation }) {
    
  const [contador, setContador] = useState(0);
  const onPress = () => setContador(Count => Count + 1);
  
  return (
    <View style={styles.containercontador}>
      
      
      <Text style={styles.txtContador}>{contador}</Text>

      <TouchableOpacity onPress={onPress}>
      <Image
        style={styles.imgbutton}
        source={{uri:'https://image.freepik.com/free-vector/realistic-3d-brushed-metal-circular-button_1017-18396.jpg'}}
      />
      </TouchableOpacity>

       <>
        <TouchableOpacity
          style={styles.btnVoltar}
          onPress={() => navigation.navigate('Home')}>
          <Text style={{ color: 'black', marginBottom: 100 }}>
            VOLTAR
          </Text>
        </TouchableOpacity>
      </>

      <>
      <TouchableOpacity>

      </TouchableOpacity>
      </>
    </View>
  )
}

export default App;

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#c3c1c2',
    alignItems: 'center',
    justifyContent: 'flex-start',
  },
  containercontador: {
    flex: 1,
    backgroundColor: '#c3c1c2',
    alignItems: 'center',
    justifyContent: 'flex-start',
  },
  titulo: {
    marginTop: '3%',
    fontSize: 12,
  },
  subtitulo: {
    fontSize: 15,
    color: '#f5f5f5',
  },
  btnEntrar: {
    marginTop: '30%',
    width: 300,
    height: 50,
    justifyContent: 'center',
  },
  btnEntrarTexto: {
    color: 'black',
    fontSize: 20,
    textAlign: 'center',
  },
  viewInterna: {
    backgroundColor: '#f5f5f5',
    width: '100%',
    height: '80%',
    borderRadius: 30,
    alignItems: 'center',
    marginTop: 100,
  },
  imagem: {
    marginTop: '20%',
    width: '80%',
    height: 300,
  },
  txtContador: {
    marginTop: '20%',
    fontSize: 70,
  },
  imgbutton: {
    marginTop: '20%',
    width: 200,
    height: 200,
    opacity: 0.7,
  },
  btnVoltar:{
    marginTop: '20%',
  }
});
