import * as React from 'react';
import { StyleSheet, Text, TouchableOpacity, View } from 'react-native';
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { Inter_200ExtraLight } from '@expo-google-fonts/inter';

const styles = StyleSheet.create({
  container_home: {
    flex: 1,
    backgroundColor: 'silver',
    alignItems: 'center',
    justifyContent: 'center',
  },
  container_details: {
    flex: 1,
    backgroundColor: 'orange',
    alignItems: 'center',
    justifyContent: 'center',
  },
  btnNavegar: {
    marginTop: 8,
    borderWidth: 1,
    borderRadius: 8,
    borderColor: 'black',
    height: 30,
    width: 200,
  },
  btnTransportar: {
    marginTop: 8,
    borderRadius: 8,
    borderColor: 'black',
    backgroundColor: 'black',
    height: 30,
    width: 200,
  }
})

function HomeScreen({ navigation }) {
  return (
    <View style={styles.container_home}>
      <Text>
        Home Screen
      </Text>
      <TouchableOpacity style={styles.btnNavegar} onPress={() => navigation.navigate('Details')}>
        <Text style={{ color: 'black', textAlign: "center", marginTop: 4 }}>DETAILS</Text>
      </TouchableOpacity>

      <TouchableOpacity style={styles.btnTransportar} onPress={() => navigation.navigate('Details', {
        Param1: 55, Param2: 'TEXTO TRANSP.'
      })}>
        <Text style={{ color: 'white', textAlign: "center", marginTop: 4 }}>TRANSPORTAR DADOS</Text>
      </TouchableOpacity>
    </View>
  )
}

function DetailsScreen({ route, navigation }) {
  const { Param1, Param2 } = route.params;
  return (
    <View style={styles.container_details}>
      <Text>
        Details Screen
      </Text>

      <Text>
        1º Parametro: {(JSON.stringify(Param1))}
      </Text>

      <Text>
        2º Parametro:: {(JSON.stringify(Param2))}
      </Text>

      <TouchableOpacity style={styles.btnNavegar} onPress={() => navigation.navigate('Details')}>
        <Text style={{ color: 'black', textAlign: "center", marginTop: 4 }}>DETAILS</Text>
      </TouchableOpacity>

      <TouchableOpacity style={styles.btnNavegar} onPress={() => navigation.navigate('Home')}>
        <Text style={{ color: 'black', textAlign: "center", marginTop: 4 }}>HOME</Text>
      </TouchableOpacity>

      <TouchableOpacity style={styles.btnNavegar} onPress={() => navigation.goBack()}>
        <Text style={{ color: 'black', textAlign: "center", marginTop: 4 }}>GO BACK</Text>
      </TouchableOpacity>
    </View>
  )
}

const Stack = createNativeStackNavigator();

function App() {
  return (
    <NavigationContainer>
      <Stack.Navigator initialRouteName='Home'>
        <Stack.Screen name='Home' component={HomeScreen} />
        <Stack.Screen name='Details' component={DetailsScreen} />
      </Stack.Navigator>
    </NavigationContainer>
  );
}

export default App;

/*
export default function App() {
  return (
    <SafeAreaView style={styles.container}>
      <Text>OK</Text>
    </SafeAreaView>
  );
} */