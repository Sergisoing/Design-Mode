# Design-Mode
php设计模式学习

设计模式主要分为三类：
    创建型，结构型，行为型

一、创建型：
<ol>
    <li>工厂模式</li>
        <p>将对象的创建交给工厂来实现</p>
        <ul>
            <li>普通工厂</li>
                <img src="./img/SimpleFactory.jpg" height="500" width="660" alt="">
                <p>一般采用静态方法，给方法传递不同的参数生成不同的对象</p>
                <p>缺点在于：新增一个产品类的时候需要修改工厂方法</p>
            <li>工厂方法</li>
                <img src="./img/FactoryMethod.jpg" height="501" width="660" alt="">
                <p>与普通工厂不同的是为每一个产品创建了一个工厂，每个产品都对应这一个产品工厂</p>
            <li>抽象工厂模式</li>
                <img src="./img/AbstractFactory.jpg" height="501" width="660" alt="">
                <p>为创建一组相关或相互依赖的对象提供一个接口，而且无需指定它们的具体类。</p>
                <p>确定无法创建，新的产品类</p>
        </ul>
    <li>单例模式</li>
        <p>一个类至始至终都只产生一个实例化对象</p>
    <li>原型模式</li>
    <li>建造者模式</li>
    <li>工厂方法</li>
</ol>
二、结构型
    <ol>
        <li>适配器模式</li>
        <li>桥接模式</li>
        <li>装饰模式</li>
        <li>代理模式</li>
        <li>组合模式</li>
    </ol>


