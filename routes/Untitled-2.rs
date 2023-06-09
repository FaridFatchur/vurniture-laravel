ChangeNotifierProxyProvider<Auth, Products>(
          create: (context) => Products(),
          update: (context, auth, products) => products..updateData(auth.token, auth.userId),
        ),